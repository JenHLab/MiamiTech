<?php

namespace App\Http\Controllers;

use App\Acin;
use App\Description;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toin0u\Geocoder\Facade\Geocoder;
use Geocoder\Provider\GoogleMaps;

class AcinController extends Controller
{
    public function acin_json(){

        $original_json_string = Acin::all();

    	$original_data = json_decode($original_json_string, true);
    	$feature_collection = new \stdClass;
    	$feature_collection->type = "Feature Collection";
    	$feature_collection->features = array();


    	foreach($original_data as $key => $value) {
	    	$feature = new \stdClass;
	    	$feature->type = "Feature";
	    	$feature->geometry = new \stdClass;
	    	$feature->geometry->type = "Point";
	    	$feature->geometry->coordinates = array($value['longitude'], $value['latitude']);
            $feature->properties =  array('name' => $value["name"]);
	    	$feature_collection->features[] = $feature;

    	}
    		
		return response()->json($feature_collection);

    }

    public function index(Acin $acin){

    	$acin = Acin::all();

    	return view('acin.index', compact('acin'));

    }

    public function show(Acin $acin){
        
    	   $acin = Acin::all();

    	return view('acin.show', compact('acin'));

    }

    public function create(){
    
        return view('acin.create', compact('acin'));
    }

    public function store(Request $request){

        /*$geocoder = new google.maps.Geocoder();

        function getCoordinates(address, callback){

            var coordinates; 
            geocoder.geocode({address:address}, function (results, status) {
                coords_obj = results[0].geometry.location;
                coordinates = [coords_obj.nb, coords_obj.ob];
                callback(coordinates);
            })
        }*/

        $address = $request->address;
        $geocode = Geocoder::geocode($address);
        //$geocode = Geocoder::geocode('10 rue Gambetta, Paris, France');
       // $request->latitude = $geocode->getLatitude();
        //$request->longitude = $geocode->getLongitude();
        

        $acin = new Acin;
        $acin->name = $request->name;
        $acin->latitude = $geocode->getLatitude();
        $acin->longitude = $geocode->getLongitude();
        $acin->about = $request->about;
        $acin->website = $request->website;
        $acin->address = $request->address;
        $acin->contact = $request->contact;
        $acin->save();
        
        //$acin = Acin::all();

        //return $request->all();

        //return view('acin.index', compact('acin'));

        return redirect('acin');


    }

    public function edit(Acin $acin){

        /*$acin = Acin::findOrFail($id);*/


        return view('acin.edit', compact('acin'));

    }

    public function update(Request $request, Acin $acin){

        $acin->update($request->all());
        $acin->name = $request->name;
        $acin->about = $request->about;
        $acin->address = $request->address;
        $acin->website = $request->website;
        $acin->contact = $request->contact;


        return back();

    }

}
