<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ServiceType;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ServiceTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $service_type_all = ServiceType::all();
        $data['main_tilte'] = 'Advisor Panel';
        $data['sub_title'] = "List Advisor";
        $date['services'] = $service_type_all;
    
        return view('advisor.service_type_list')->with('service_type_all', $service_type_all);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
       return view('advisor.service_type_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $service_type = new ServiceType();
        $service_type->serty_name = Input::get('serty_name');
        $service_type->save();
        
        return Redirect::to('service_type');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $service_type = ServiceType::find($id);
        return view('advisor/service_type_edit')->with('service_type',$service_type);
        
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        $service_type = ServiceType::find($id);
        $service_type->serty_name = Input::get('name');
              
        $service_type->save();
        
        return Redirect::to('service_type');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        $service_type = ServiceType::findOrFail($id);

        $service_type->delete();

        return Redirect::to('service_type');
	}

}
