<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Advisor;
use App\Student;
use Auth;
use Redirect;
use Mail;

class AdvisorController extends Controller {

    public function __construct()
    {
        if (Auth::check()) {
            // The user is logged in...
            echo "not loged in";
            exit();
        }
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$advisor_all = Advisor::all();

        $data['main_tilte'] = 'Advisor Panel';
        $data['sub_title'] = "List Advisor";
        $date['advisors'] = $advisor_all;
     
        return view('advisor.advisor_list')->with('advisors', $advisor_all);

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        //return view('advisor/advisor_create',['main_title'=>'Advisor Panel' ,'sub_title' => 'Register Advisor']);
        return view('advisor.advisor_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$advisor = new Advisor();
        $advisor->adv_fname = $request->fname;
        $advisor->adv_lname = $request->lname;
        $advisor->adv_password = bcrypt($request->password);
        $advisor->adv_email = $request->email;
        $advisor->is_active = true;
        
        $advisor->save();
        
        //return view('advisor/advisor_create',['main_title'=>'Advisor Panel' ,'sub_title' => 'Register Advisor']);
        return redirect()->route('advisor.index');
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
        $advisor = Advisor::find($id);
        return view('advisor.advisor_profile')->with('advisor',$advisor);
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
        $advisor = Advisor::findOrFail($id);
        return view('advisor.advisor_edit')->with('advisor', $advisor);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
        $advisor = Advisor::find($id);
        //$advisor_update = $request->all();
        
        $advisor_update['adv_fname'] = $request->fname;
        $advisor_update['adv_lname'] = $request->lname;
        $advisor_update['adv_email'] = $request->email; 
        if(!empty($request->password))
        {
           $advisor_update['adv_password'] = bcrypt($request->password); 
        }
        
        $advisor->update($advisor_update);
        
        return redirect()->route('advisor.index');
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
        $advisor = Advisor::find($id);
        $advisor->delete();
        
        return redirect()->route('advisor.index');
	}
    
     /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailInvitation(Request $request)
    {
        Mail::send('advisor.mails.invitation', array('test' => 'test'), function ($message){
            $message->from('lamadipen@yahoo.com', 'Your Application');
            $message->to(Input::get('email'))->subject('Your Reminder!');
        });        
        return view('advisor.advisor_invite');  
    }
    
    /**
     * Display a listing of all students.
     *
     * @return Response
     */
    public function listAllStudent()
    {
        $student_all = Student::all();

        return view('advisor.manage_student_list')->with('students', $student_all);
    }
   
   /**
     * Display detail information of a student
     * @param $id => student id 
     * @return Response
    */
   public function getStudentDetail($id =null)
   {
        //$student = Student::find($id);
        
        //return view('advisor.advisor_profile')->with('advisor',$advisor);
        
        $student = \DB::table('students')
            ->select('students.std_id',
            'students.std_fname',
            'students.std_lname',
            'students.std_email',
            'students.std_isActive',
            'students.std_gradYear',
            'volunteer_hours.vh_done',
            'services.ser_name',
            'services.ser_desc',
            'supervisors.sup_fname',
            'supervisors.sup_lname',
            'supervisors.sup_email',
            'supervisors.sup_phone',
            'organizations.org_name',
            'organizations.org_address'
           )
            ->join('volunteer_hours', 'volunteer_hours.std_id', '=', 'students.std_id')
            ->join('services', 'services.std_id', '=', 'students.std_id')
            ->join('supervisors', 'supervisors.sup_id', '=', 'services.sup_id')
            ->join('organizations', 'organizations.org_id', '=', 'services.org_id')
            ->where('students.std_id','=',$id)
            ->get();
            
            $student = array_map(function($object){
                return (array) $object;
            }, $student);
                        
            //var_dump($student);
            
            return view('advisor.manage_student_dtl', ['student' => $student]);
   } 
    
    
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {                   
        $email = $request->identity;
        $password = $request->password;        
    
        if (Auth::attempt(['adv_email' => $email, 'password' => $password])) {
            
            // Redirect::to('advisor')->send();
            // Authentication passed... 
            return redirect()->intended('advisor');        
        } 
        else
        {
            echo "Fail";
            return redirect()->route('advisor/advisor.login');
        }         
    }

    public function getLogin(){
            return view('hello');
    }

}
