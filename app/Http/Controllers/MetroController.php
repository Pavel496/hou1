<?php

namespace App\Http\Controllers;

use App\Types;
use App\Direction;
use App\Readiness;
use App\Properties;
use App\Metrostation;
use App\PropertyGallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MetroController extends Controller
{
  public function station($station=null, $stations=null){

    $metrostations = Metrostation::orderBy('name')->get()->groupBy(function ($metrostation) {
        return substr($metrostation->name, 0, 2);});

    if (empty($stations)) {
      $stations = $station;
    }else{
      $stations = $stations.', '.$station;
    }
// dd($stations);
    return view('metrostations.index', compact('metrostations', 'stations'));

  }


  public function back_from_metro($stations=null){
// dd($stations);
    $id = session('id');

    $decrypted_id = Crypt::decryptString($id);

    $property = Properties::where('id',$decrypted_id)->first();

    $types = Types::orderBy('types')->get();
    $directions = Direction::orderBy('name')->get();
    $readinesses = Readiness::orderBy('name')->get();

    $property_gallery_images = PropertyGallery::where('property_id',$property->id)->orderBy('image_name')->get();

    // $metrostations = Metrostation::orderBy('name')->get()->groupBy(function ($metrostation) {
    //     return substr($metrostation->name, 0, 2);});
    // $stations = $property->property_features;

    return view('pages.edit_property',compact('property','types', 'directions', 'readinesses', 'property_gallery_images', 'stations'));

  }


  // public function clear(){

    // $types = Types::orderBy('types')->get();
    // $directions = Direction::orderBy('name')->get();
    // $readinesses = Readiness::orderBy('name')->get();

    // $stations = '';

    // return back()->with(compact('stations'));
    // return view('pages.edit_property',compact('stations'));
  // }


    // public function stationm($station=null){
    //   // $station = $request->station;
    //   $stations = session('stations');
    //   if (empty($stations)) {
    //     $stations = $station;
    //   }else{
    //     $stations = $stations.', '.$station;
    //   }
    //
    //   session(['stations' => $stations]);
    //
    //   return redirect()->back();
    //
    // }

}
