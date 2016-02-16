<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model {

	//
    protected $primaryKey = 'adv_id';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['adv_fname', 'adv_lname','adv_email','adv_password'];

}
