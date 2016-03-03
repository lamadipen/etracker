<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	//
     protected $primaryKey = 'sett_id';
     
     public function serviceType()
     {
        return $this->belongsTo('App\ServiceType','serty_id');
     }
}
