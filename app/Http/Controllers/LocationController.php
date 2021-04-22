<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('dashboard.locations.index',compact('locations'));
    }

    public function create(){
        $locations = Location::all();
        return view('dashboard.locations.create',compact('locations'));

    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:50',
            'parent_id' => 'required'
        ]);
        $location = new Location();
        $location->name = $request->name;
        $location->parent_id    = $request->parent_id;
        $location->status       = ($request->status) ? 1 : 0;
        $location->save();
        return redirect('dashboard/locations');
    }

    public function edit($id){
        $locations = Location::all();
        $t_location = Location::find($id);
        return view('dashboard.locations.edit',compact('locations','t_location'));

    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required|max:50',
            'parent_id' => 'required'
        ]);

        $location = Location::find($request->id);
        $location->name = $request->name;
        $location->parent_id    = $request->parent_id;
        $location->status       = ($request->status) ? 1 : 0;
        $location->save();
        return redirect('dashboard/locations');

    }
}
