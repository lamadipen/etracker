<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   /**
		$advisor_all = Advisor::all();

        $data['main_tilte'] = 'Advisor Panel';
        $data['sub_title'] = "List Advisor";
        $date['advisors'] = $advisor_all;
     
        return view('advisor.advisor_list')->with('advisors', $advisor_all);
        **/
        return view('student.std_create');

    }
}
