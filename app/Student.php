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
    
    

}
