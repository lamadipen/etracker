<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	//
    protected $table = 'services';
    
    protected $primaryKey = 'ser_id';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status'];

}
