<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SchoolYear;
use Redirect;


class SchoolYearController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{  
		$sch_year = SchoolYear::orderBy('sch_year','desc')->take(1)->get();
 
        /**
        $data['main_tilte'] = 'Advisor Panel';
        $data['sub_title'] = "List Advisor";
        $date['advisors'] = $advisor_all;
        **/
        return view("advisor.school_year")->with('current_year',$sch_year);

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$sch_year = new SchoolYear();
        $sch_year->sch_year = $request->new_sch_year;
        $sch_year->is_current = true;
        $sch_year->save();
        return redirect()->route('schoolYear.index');
	}
}
