<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Properties;
use App\Testimonials;
use App\Subscriber;
use App\Partners;

use Mail;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Jenssegers\Agent\Agent;

class IndexController extends Controller
{


    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }

    public function index()
    {
    	if(!$this->alreadyInstalled()) {
            return redirect('install');
        }

    $data['type'] = null;
    $data['direction'] = null;
    $data['currency'] = null;
    $data['pricemin'] = '0';
    $data['pricemax'] = '750000000';
    $data['rangemin'] = '0';
    $data['rangemax'] = '100';
    $data['landmin'] = '0';
    $data['landmax'] = '300';
    $data['buildmin'] = '0';
    $data['buildmax'] = '3000';

    if (!(session()->has('currencyname'))) {
      $currencysymbol = '₽';
      $currencyname = 'Рубли';

      session(['currencysymbol' => $currencysymbol]);
      session(['currencyname' => $currencyname]);
    }

    // if (!(session()->has('stations'))) {
    //   $stations = '';
    //
    //   session(['stations' => $stations]);
    // }    


// dd($propertieslist);
        // $featured_properties = Properties::where('featured_property','1')->orderBy('id', 'desc')->take(6)->get();
    $propertieslist = Properties::where('status','1')->orderBy('id', 'desc')->paginate(6);
		// $partners = Partners::orderBy('id', 'desc')->get();
    $agent = new Agent();
    // agent detection influences the view storage path
    if ($agent->isMobile()) {
        // you're a mobile device
        return view('mobile.all',compact('propertieslist', 'data'));
    } else {
        // you're a desktop device, or something similar
        // return view('mobile.all',compact('propertieslist', 'data'));
        return view('pages.index',compact('propertieslist', 'data'));
    }

    }

    public function design()
    {
        $fotos = Partners::all();
        return view('pages.design', compact('fotos'));
    }

    public function advice()
    {
        $advices = Testimonials::all();
        // dd($advices);
        return view('pages.advice', compact('advices'));
    }

    public function testimonialslist()
    {
        $alltestimonials = Testimonials::orderBy('id','desc')->paginate(10);

        return view('pages.testimonials',compact('alltestimonials'));
    }

    public function subscribe(Request $request)
    {

    	$data =  \Input::except(array('_token')) ;

	    $inputs = $request->all();

	    $rule=array(
		        'email' => 'required|email|max:75'
		   		 );

	   	 $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                 \Session::flash('error_flash_message', 'The email field is required.
');
                return redirect('/#top-footer');

        }

    	$subscriber = new Subscriber;

    	$subscriber->email = $inputs['email'];
    	$subscriber->ip = $_SERVER['REMOTE_ADDR'];


	    $subscriber->save();

       \Session::flash('flash_message_subscribe', 'Successfully subscribe!');

        return redirect('/#top-footer');

    }

	public function aboutus_page()
    {
        return view('pages.about');
    }

    public function pricing_plan()
    {
        return view('pages.pricing_plan');
    }

    public function contact_us_page()
    {
        return view('pages.contact');
    }

    public function contact_us_sendemail(Request $request)
    {

    	$data =  \Input::except(array('_token')) ;

	    $inputs = $request->all();

	    $rule=array(
		        'name' => 'required',
				'email' => 'required|email',
		        'your_message' => 'required'
		   		 );

	   	 $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages())->withInput();
        }


        $data_email = array(
                'name' => $inputs['name'],
                'email' => $inputs['email'],
                'phone' => $inputs['phone'],
                'website' => $inputs['website'],
                'your_message' => $inputs['your_message']
                );

        \Mail::send('emails.contact', $data_email, function($message) use ($inputs){
                $message->to(getcong('contact_us_email'), getcong('site_name'))
                ->from(getcong('site_email'), getcong('site_name'))
                ->subject(getcong('site_name').' Contact');
        });

         \Session::flash('flash_message_contact', 'Спасибо за сообщение!');

 		 return \Redirect::back();
    }


    /**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login()
    {
    	if (Auth::check()) {

            return redirect('dashboard');
        }

        return view('pages.login');
    }


    public function postLogin(Request $request)
    {

    //echo bcrypt('123456');
    //exit;
    if(getcong('recaptcha')==1)
    {
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required','g-recaptcha-response' => 'required|captcha'
        ]);
    }
    else
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required'
        ]);
    }

        $credentials = $request->only('email', 'password');



         if (Auth::attempt($credentials, $request->has('remember'))) {

            if(Auth::user()->status=='0'){
                \Auth::logout();
                return redirect('/login')->withErrors('Your account is not activated yet, please check your email.');
            }

            return $this->handleUserWasAuthenticated($request);
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');
       return redirect('/login')->withErrors('The email or the password is invalid. Please try again.');

    }

     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect('/dashboard');
    }

    public function register()
    {
    	if (Auth::check()) {

            return redirect('admin/dashboard');
        }

        return view('pages.register');
    }

    public function postRegister(Request $request)
    {

    	$data =  \Input::except(array('_token')) ;

	    $inputs = $request->all();

       if(getcong('recaptcha')==1)
       {

	        $rule=array(
		        'name' => 'required',
		        'email' => 'required|email|max:75|unique:users',
		        'password' => 'required|min:3|confirmed',
                'g-recaptcha-response' => 'required|captcha'
		   		 );

        }
        else
        {

            $rule=array(
                'name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'required|min:3|confirmed'
                 );

        }


	   	 $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        }


        $user = new User;

		$string = str_random(15);
		$user_name= $inputs['name'];
		$user_email= $inputs['email'];

		$user->usertype = 'User';
		$user->name = $user_name;
		$user->email = $user_email;
		$user->password= bcrypt($inputs['password']);

		$user->confirmation_code= $string;

	    $user->save();


        //Verify user
        $user_name=$inputs['name'];

        $data_email = array(
        'name' => $user_name,
        'confirmation_code' => $string
        );

        \Mail::send('emails.verify', $data_email, function($message) use ($inputs){
            $message->to($inputs['email'], $inputs['name'])
            ->from(getcong('site_email'), getcong('site_name'))
            ->subject('Welcome to'.getcong('site_name'));
        });


            \Session::flash('flash_message', 'Please verify your account. We\'ll send a verification link to the email address.');

            return \Redirect::back();


    }


    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        //return redirect('admin/');
        return redirect('/');
    }

    public function confirm($code)
    {

        $user = User::where('confirmation_code',$code)->first();

 		$user->status = '1';

 		$user->save();

 		\Session::flash('flash_message', 'Confirmation successfully...');

        return redirect('login/');
        //return view('pages.login');
    }

    public function sitemap()
    {
        $site_url=\URL::to('/');

        $properties = Properties::where(['status'=>'1'])->orderBy('id', 'desc')->get();

        return response()->view('pages.sitemap',compact('site_url','properties'))->header('Content-Type', 'text/xml');
    }

}
