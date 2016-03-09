<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerHour extends Model {

	//
     //
    protected $primaryKey = 'vh_id';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['vh_done'];
}
