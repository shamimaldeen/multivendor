<?php

namespace App\Http\Controllers;

use App\Location;
use App\Service;
use Illuminate\Http\Request;
use Session;

class VendorServiceController extends Controller
{
    public function add($parent=null){
        $step = 0;
        if($parent==null) {
            $parent_service = Service::where('parent_id', 1)->get();
        }else{
            $parent_service = Service::where('parent_id', $parent)->get();
        }
        return view('vendors.services.add',compact('parent_service','step'));
    }

   public function selectService(Request $request){
       if(is_array($request->service_id)){
           $step=2;
           Session::put('selected_service',$request->service_id);
           return view('vendors.services.add', compact( 'step'));
       }else {
           Session::put('parent_service', $request->service_id);
           $p_service = Service::find($request->service_id);
           $services = Service::where('parent_id', $request->service_id)->get();
           if (count($services) > 0) {
               $step = 1;
               return view('vendors.services.add', compact('services', 'step', 'p_service'));
           } else {
               $step=2;
               return view('vendors.services.add', compact('services', 'step'));
           }
       }

    }

    public function step2(Request $request){
        Session::put('information',$request->all());
        $step = 3;
        return view('vendors.services.add', compact( 'step'));
    }

    public function step3(Request $request){
        Session::put('pricing_information',$request->all());
        $step = 4;
        return view('vendors.services.add', compact( 'step'));
    }
    public function step4(Request $request){
        Session::put('detail_information',$request->all());
        $step = 5;
        $locations = Location::where('parent_id',1)->get();
        return view('vendors.services.add', compact( 'step','locations'));
    }

    public function step5(Request $request){
//        dd($request->all());
        return view('vendors.services.add', compact( 'step'));
    }

    public function selectDistrict($id){
        $location = Location::find($id);
        $locations = $location->children();
        return $locations->get(['id','name']);
    }
}
