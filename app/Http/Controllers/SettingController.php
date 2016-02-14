<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Setting;
use App\ServiceType;


class SettingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $settings = Setting::all();
        $data['main_tilte'] = 'Advisor Panel';
        $data['sub_title'] = "List Advisor";
        $date['services'] = $settings;
        
        return view('advisor.setting_list')->with('settings', $settings);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        $service_types = ServiceType::All();
        return view('advisor.setting_create')->with('service_types',$service_types);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $setting = new Setting();
        $setting->serty_id = $request->serty_id;
        $setting->sett_hour = $request->hour;
        
        $setting->save();
        return Redirect::to('setting');
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
        $setting = Setting::find($id);
        $setting->delete();
        
        return redirect()->route('setting.index');
	}

}
