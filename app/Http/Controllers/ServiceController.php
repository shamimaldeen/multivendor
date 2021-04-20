<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('dashboard.services.index',compact('services'));
    }

    public function create(){
        $services = Service::all();
        return view('dashboard.services.create',compact('services'));

    }
    public function store(Request $request){
        $this->validate($request,[
            'service_name' => 'required|max:50',
            'parent_id' => 'required',
            'type' => 'required',
        ]);
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->parent_id    = $request->parent_id;
        $service->type    = $request->type;
        $service->status       = ($request->status) ? 1 : 0;
        $service->save();
        return redirect('dashboard/services');
    }

    public function edit($id){
        $services = Service::all();
        $t_service = Service::find($id);
        return view('dashboard.services.edit',compact('services','t_service'));

    }

    public function update(Request $request){
        $this->validate($request,[
            'service_name' => 'required|max:50',
            'parent_id' => 'required',
            'type' => 'required',
        ]);

        $service = Service::find($request->id);
        $service->service_name = $request->service_name;
        $service->parent_id    = $request->parent_id;
        $service->type         = $request->type;
        $service->status       = ($request->status) ? 1 : 0;
        $service->save();
        return redirect('dashboard/services');

    }

}
