<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
    	$device = Device::all();
    	return view('device', ['device' => $device]);
    }

    public function add()
    {
    	return view('device_add');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'type' => 'required',
    		'quantity' => 'required|numeric',
    		'price' => 'required|numeric',
    	]);

    	Device::create([
    		'name' => $request->name,
    		'type' => $request->type,
    		'quantity' => $request->quantity,
    		'price' => $request->price,
    	]);
  
    	return redirect('/device');
    }

    public function edit($id)
    {
    		$device = Device::find($id);
    		return view('device_edit', ['device' => $device]);
    }

     public function update($id, Request $request)
    {
    		$this->validate($request,[
                'name' => 'required',
                'type' => 'required',
                'quantity' => 'required',
                'price' => 'required',
	    	]);

    		$device = Device::find($id);
    		$device->name = $request->name;
    		$device->type = $request->type;
    		$device->quantity = $request->quantity;
    		$device->price = $request->price;
    		$device->save();
    		return redirect('/device');
    }

     public function delete($id)
    {
    		$device = Device::find($id);
    		$device->delete();
    		return redirect('/device');
    }
}
