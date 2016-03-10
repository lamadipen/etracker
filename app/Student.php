<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	//
    protected $table = 'students';
    
    /**
     * Get the volunteer hours  for the student post.
     */
    public function vol_hours()
    {
         return $this->belongsTo('App\VolunteerHour','std_id');
    }
    
    /**
     * Get the volunteer hours  for the student post.
    */ 
    public function services()
    {
         return $this->belongsTo('App\Service','std_id');
    }
    
    
    /**
     * Get volunteer hour and service of the student.
     */
    public function service_hours()
    {
        return $this->hasManyThrough('App\ServiceStatus','App\Service' ,'std_id','sers_id');
    }
    
    
    

}
