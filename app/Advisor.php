<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Advisor extends Model implements AuthenticatableContract{

    use Authenticatable;
	
    protected $table = 'advisors';
    
    //
    protected $primaryKey = 'adv_id';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['adv_fname', 'adv_lname','adv_email','adv_password'];
    
    	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['adv_password', 'remember_token'];
    
    public function getAuthPassword() {
        return $this->adv_password;
    }
 
}
