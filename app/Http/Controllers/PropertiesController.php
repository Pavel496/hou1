<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Properties;
use App\PropertyGallery;
use App\Enquire;
use App\Types;
use App\Direction;
use App\Readiness;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Crypt;

class PropertiesController extends Controller
{

    public function index()
    {
    	$properties = Properties::where('status','1')->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));

        if(getcong('all_properties_layout')=='rows')
        {
            return view('pages.properties_rows',compact('properties'));
        }
        else if(getcong('all_properties_layout')=='grid_side')
        {
            return view('pages.properties_grid_sidebar',compact('properties'));
        }
        else
        {
            return view('pages.properties_grid',compact('properties'));
        }

    }

    public function featuredproperties()
    {
    	$properties = Properties::where(['status'=>'1','featured_property'=>'1'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));

        if(getcong('featured_properties_layout')=='rows')
        {
            return view('pages.featured_properties_rows_sidebar',compact('properties'));
        }
        else if(getcong('featured_properties_layout')=='grid_side')
        {
            return view('pages.featured_properties_grid_sidebar',compact('properties'));
        }
        else
        {
           return view('pages.featured_properties_grid',compact('properties'));
        }


    }

    public function saleproperties()
    {
    	$properties = Properties::where(['status'=>'1','property_purpose'=>'Продажа'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));

        $data['type'] = null;
        $data['direction'] = null;
        $data['currency'] = null;
        $data['pricemin'] = '0';
        $data['pricemax'] = '300';
        $data['rangemin'] = '0';
        $data['rangemax'] = '50';
        $data['landmin'] = '0';
        $data['landmax'] = '50';
        $data['buildmin'] = '0';
        $data['buildmax'] = '3000';

        if(getcong('sale_properties_layout')=='rows')
        {
            return view('pages.sale_properties_rows_sidebar',compact('properties'));
        }
        else if(getcong('sale_properties_layout')=='grid_side')
        {
            return view('pages.sale_properties_grid_sidebar',compact('properties'));
        }
        else
        {
           return view('pages.sale_properties_grid',compact('properties', 'data'));
        }


    }

    public function rentproperties()
    {
    	$properties = Properties::where(['status'=>'1','property_purpose'=>'Аренда'])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));

      $data['type'] = null;
      $data['direction'] = null;
      $data['currency'] = null;
      $data['pricemin'] = '0';
      $data['pricemax'] = '300';
      $data['rangemin'] = '0';
      $data['rangemax'] = '50';
      $data['landmin'] = '0';
      $data['landmax'] = '50';
      $data['buildmin'] = '0';
      $data['buildmax'] = '3000';

        if(getcong('rent_properties_layout')=='rows')
        {
            return view('pages.rent_properties_rows_sidebar',compact('properties'));
        }
        else if(getcong('rent_properties_layout')=='grid_side')
        {
            return view('pages.rent_properties_grid_sidebar',compact('properties'));
        }
        else
        {
           return view('pages.rent_properties_grid',compact('properties', 'data'));
        }

        // return view('pages.rentproperties',compact('properties'));
    }


    public function propertiesbytype($slug)
    {

    	$type_data=Types::where('slug',$slug)->first();

    	$properties = Properties::where(['status'=>'1','property_type'=>$type_data->id])->orderBy('id', 'desc')->paginate(getcong('pagination_limit'));

    	if(!$properties){
            abort('404');
        }

    	$type=$type_data->types;

        return view('pages.propertiesbytype',compact('properties','type'));
    }

    public function map_property_urlset($id)
    {
        $property = Properties::findOrFail($id);

         return redirect('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id));
    }

    public function single_properties($slug,$id)
    {

        $decrypted_id = Crypt::decryptString($id);

        $property = Properties::findOrFail($decrypted_id);

    	if(!$property){
            abort('404');
        }

    	$agent = User::findOrFail($property->user_id);

        $property_gallery_images= PropertyGallery::where('property_id',$property->id)->get();

        return view('pages.single_properties',compact('property','agent','property_gallery_images'));
    }

	public function agentscontact(Request $request)
    {

    	$data =  \Input::except(array('_token')) ;

	    $inputs = $request->all();

	    $rule=array(
		        'name' => 'required',
				'email' => 'required',
		        'message' => 'required'
		   		 );

	   	 $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                \Session::flash('flash_message_agent', 'name,email and message field are required');
                return redirect()->back()->withErrors($validator->messages());

        }

    	$enquire = new Enquire;

    	$enquire->property_id = $inputs['property_id'];
    	$enquire->agent_id = $inputs['agent_id'];
    	$enquire->name = $inputs['name'];
    	$enquire->email = $inputs['email'];
    	$enquire->phone = $inputs['phone'];
    	$enquire->message = $inputs['message'];


	    $enquire->save();

	    \Session::flash('flash_message_agent', 'Message send successfully');

         return \Redirect::back();

    }


    public function searchproperties(Request $request)
    {
    	$data =  \Input::except(array('_token')) ;

	    $inputs = $request->all();
// dd($inputs);
			$price = explode(",", $inputs['price']);
      $range = explode(",", $inputs['range']);
      $land = explode(",", $inputs['land_area']);
      $build = explode(",", $inputs['build_area']);

      $pricemin = (int)$price[0]*1000000;
      $pricemax = (int)$price[1]*1000000;
      $rangemin = $range[0];
      $rangemax = $range[1];
      $landmin = $land[0];
      $landmax = $land[1];
      $buildmin = $build[0];
      $buildmax = $build[1];

      // if ($buildmax == '975') {
      //   $buildmaxmy = '3000';
      // } else {
      //   $buildmaxmy = $buildmax;
      // }

      $data['pricemin'] = strval($pricemin/1000000);
      $data['pricemax'] = strval($pricemax/1000000);
      $data['rangemin'] = $rangemin;
      $data['rangemax'] = $rangemax;
      $data['landmin'] = $landmin;
      $data['landmax'] = $landmax;
      $data['buildmin'] = $buildmin;
      $data['buildmax'] = $buildmax;

// dd($data);
      $purpose=$inputs['purpose'];
 	 		$direction=$inputs['direction'];
      $type=$inputs['type'];
      $keyword=$inputs['keyword'];
      $currency=$inputs['currency'];
      $data['currency'] = $currency;

      if (($purpose == 'Продажа') && ($currency <> '₽$€')) {
        $properties = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->where("currency", $currency)
                    ->where("property_purpose", $purpose)
                    ->paginate(getcong('pagination_limit'));
        return view('pages.sale_properties_grid',compact('properties', 'data'));
      } elseif (($purpose == 'Продажа') && ($currency == '₽$€')) {
        $properties = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->where("property_purpose", $purpose)
                    ->paginate(getcong('pagination_limit'));
        return view('pages.sale_properties_grid',compact('properties', 'data'));
      } elseif (($purpose == 'Аренда') && ($currency <> '₽$€')) {
        $properties = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->where("currency", $currency)
                    ->where("property_purpose", $purpose)
                    ->paginate(getcong('pagination_limit'));
        return view('pages.rent_properties_grid',compact('properties', 'data'));
      } elseif (($purpose == 'Аренда') && ($currency == '₽$€')) {
        $properties = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->where("property_purpose", $purpose)
                    ->paginate(getcong('pagination_limit'));
        return view('pages.rent_properties_grid',compact('properties', 'data'));
      } else {
        if ($currency == '₽$€') {
          $propertieslist = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("status", "1")
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->paginate(getcong('pagination_limit'));
          return view('pages.index',compact('propertieslist', 'data'));
        } else {
          $propertieslist = Properties::SearchByKeyword($keyword,$direction,$type)
                    ->where("status", "1")
                    ->where("price", ">=", (int)$pricemin)
                    ->where("price", "<=", (int)$pricemax)
                    ->where("range", ">=", (int)$rangemin)
                    ->where("range", "<=", (int)$rangemax)
                    ->where("land_area", ">=", (int)$landmin)
                    ->where("land_area", "<=", (int)$landmax)
                    ->where("build_area", ">=", (int)$buildmin)
                    ->where("build_area", "<=", (int)$buildmax)

                    ->where("currency", $currency)
                    ->paginate(getcong('pagination_limit'));
          return view('pages.index',compact('propertieslist', 'data'));
        }


      }
      // return view('pages.searchproperties',compact('properties'));
    }


    public function my_properties()
    {
        if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required!');

            return redirect('login');
         }

        if(Auth::user()->usertype=='Admin')
        {
            return redirect('admin/properties');
        }
        else
        {
            $user_id=Auth::user()->id;

            $propertieslist = Properties::where('user_id',$user_id)->orderBy('id','desc')->paginate(getcong('pagination_limit'));
        }


        return view('pages.my_properties',compact('propertieslist'));
    }


    public function add_property_form()
    {
        if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

        $types = Types::orderBy('types')->get();
        $directions = Direction::orderBy('name')->get();
        $readinesses = Readiness::orderBy('name')->get();

        return view('pages.add_property',compact('types', 'directions', 'readinesses'));
    }

    public function addnew(Request $request)
    {
         $data =  \Input::except(array('_token')) ;

        $inputs = $request->all();


        if(!empty($inputs['id'])){
            $rule=array(
                'property_name' => 'required',
                'property_purpose' => 'required',
                'property_type' => 'required',

                'direction' => 'required',
                'range' => 'required',
                'readiness' => 'required',
                'currency' => 'required',

                'price' => 'required',
                // 'address' => 'required',
                // 'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        }
        else
        {
            $rule=array(
                'property_name' => 'required',
                'property_purpose' => 'required',
                'property_type' => 'required',

                'direction' => 'required',
                'range' => 'required',
                'readiness' => 'required',
                'currency' => 'required',

                'price' => 'required',
                // 'address' => 'required',
                // 'description' => 'required',
                'featured_image' => 'required|mimes:jpg,jpeg,gif,png'
                 );
        }


         $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages())->withInput();
        }

        if(!empty($inputs['id'])){

            $decrypted_id = Crypt::decryptString($inputs['id']);

            $property = Properties::findOrFail($decrypted_id);

        }else{

            $property = new Properties;

        }


        //property featured image
        $featured_image = $request->file('featured_image');

        if($featured_image){

            \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-s.jpg');


            $tmpFilePath = 'upload/properties/';

            $hardPath =  str_slug($inputs['property_name'], '-').'-'.md5(rand(0,99999));

            $img = Image::make($featured_image);

            $img->fit(640, 425)->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(358, 238)->save($tmpFilePath.$hardPath.'-s.jpg');

            $property->featured_image = $hardPath;

        }

        $floor_plan = $request->file('floor_plan');

        if($floor_plan){

            \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-b.jpg');
            \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-s.jpg');


            $tmpFilePath = 'upload/floorplan/';

            $hardPath =  str_slug($inputs['property_name'], '-').'-'.md5(rand(0,99999));

            $img = Image::make($floor_plan);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(358, 238)->save($tmpFilePath.$hardPath.'-s.jpg');

            $property->floor_plan = $hardPath;

        }


        $property_slug =str_slug($inputs['property_name'], "-");

        $user_id=Auth::user()->id;

        if(empty($inputs['id']))
        {
            $property->user_id = $user_id;
        }

        $property->property_name = addslashes($inputs['property_name']);
        $property->property_slug = $property_slug;
        $property->property_type = $inputs['property_type'];
        $property->property_purpose = $inputs['property_purpose'];
        $property->direction = $inputs['direction'];
        $property->range = $inputs['range'];
        $property->readiness = $inputs['readiness'];
        $property->currency = $inputs['currency'];
        $property->price = $inputs['price'];
        $property->address = addslashes($inputs['address']);
        $property->map_latitude = $inputs['map_latitude'];
        $property->map_longitude = $inputs['map_longitude'];
        $property->bathrooms = $inputs['bathrooms'];
        $property->bedrooms = $inputs['bedrooms'];
        $property->garage = $inputs['garage'];
        $property->land_area = $inputs['land_area'];
        $property->build_area = $inputs['build_area'];
        $property->property_features = $inputs['property_features'];
        $property->description = addslashes($inputs['description']);
        $property->video_code = addslashes($inputs['video_code']);

        if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="Agents"){

         $property->status =1;

        }

        $property->save();

        //News Gallery image
        $property_gallery_files = $request->file('gallery_file');

        // $file_count = count($property_gallery_files);

        if($request->hasFile('gallery_file'))
        {

        if(!empty($inputs['id']))
        {

            foreach($property_gallery_files as $file) {

                $property_gallery_obj = new PropertyGallery;

                $tmpFilePath = 'upload/gallery/';

                $hardPath = substr($property_slug,0,100).'_'.rand(0,9999).'-b.jpg';

                $g_img = Image::make($file);

                $g_img->save($tmpFilePath.$hardPath);

                 //$g_img->fit(640, 425)->save($tmpFilePath.$hardPath);

                //$g_img->save($tmpFilePath.$hardPath);


                $property_gallery_obj->property_id = $decrypted_id;
                $property_gallery_obj->image_name = $hardPath;
                $property_gallery_obj->save();

            }

        }
        else
        {
            foreach($property_gallery_files as $file) {

                $property_gallery_obj = new PropertyGallery;

                $tmpFilePath = 'upload/gallery/';

                $hardPath = substr($property_slug,0,100).'_'.rand(0,9999).'-b.jpg';

                $g_img = Image::make($file);

                $g_img->save($tmpFilePath.$hardPath);

                //$g_img->save($tmpFilePath.$hardPath);

                $property_gallery_obj->property_id = $property->id;
                $property_gallery_obj->image_name = $hardPath;
                $property_gallery_obj->save();

            }
        }
        }


        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Объект обновлен');

            return \Redirect::back();
        }else{

            //Email Notification

            // $user = User::findOrFail($user_id);
            // $user_full_name=$user->first_name.' '.$user->last_name;
            //
            // $data_email = array(
            //     'name' => $user_full_name
            //      );
            //
            //
            // \Mail::send('emails.property_add', $data_email, function($message) use ($inputs){
            //     $message->to(getcong('site_email'), getcong('site_name'))
            //     ->from(getcong('site_email'), getcong('site_name'))
            //     ->subject(getcong('site_name').' Property Added');
            // });

            \Session::flash('flash_message', 'Новый объект создан');

             return redirect('my_properties');

        }
    }

    public function editproperty($id)
    {

          if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

          $user_id=Auth::user()->id;

          $decrypted_id = Crypt::decryptString($id);

          if(Auth::user()->usertype=='Admin')
          {
            $property = Properties::where('id',$decrypted_id)->first();
          }
          else
          {
            $property = Properties::where('id',$decrypted_id)->where('user_id',$user_id)->first();
          }


          if(!$property){
            abort('404');
         }

          $types = Types::orderBy('types')->get();
          $directions = Direction::orderBy('name')->get();
          $readinesses = Readiness::orderBy('name')->get();

          $property_gallery_images = PropertyGallery::where('property_id',$property->id)->orderBy('image_name')->get();

          return view('pages.edit_property',compact('property','types', 'directions', 'readinesses', 'property_gallery_images'));

    }

    public function gallery_image_delete($id)
    {
         if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

        $decrypted_id = Crypt::decryptString($id);

        $property_gallery_obj = PropertyGallery::findOrFail($decrypted_id);

         \File::delete('upload/gallery/'.$property_gallery_obj->image_name);

        $property_gallery_obj->delete();

        \Session::flash('flash_message', 'Объект удален');

        return redirect()->back();

    }

    public function delete($id)
    {
        if(!Auth::user())
         {
            \Session::flash('flash_message', 'Login required');

            return redirect('login');
         }

        $user_id=Auth::user()->id;

        $decrypted_id = Crypt::decryptString($id);

        $property = Properties::where('id',$decrypted_id)->where('user_id',$user_id)->first();

          if(!$property){
            abort('404');
         }

        \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-b.jpg');
        \File::delete(public_path() .'/upload/properties/'.$property->featured_image.'-s.jpg');

        \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-b.jpg');
        \File::delete(public_path() .'/upload/floorplan/'.$property->floor_plan.'-s.jpg');

        $property->delete();

        $property_gallery_images = PropertyGallery::where('property_id',$decrypted_id)->get();

        foreach ($property_gallery_images as $gallery_images) {

            \File::delete(public_path() .'/upload/gallery/'.$gallery_images->image_name);

            $property_gallery_obj = PropertyGallery::findOrFail($gallery_images->id);
            $property_gallery_obj->delete();
        }

        \Session::flash('flash_message', 'Property Deleted');

        return redirect()->back();

    }

}
