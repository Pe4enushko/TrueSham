<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
   @property varchar $name name
@property varchar $email email
@property timestamp $email_verified_at email verified at
@property varchar $password password
@property varchar $remember_token remember token
@property timestamp $created_at created at
@property timestamp $updated_at updated at

 */
class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    /**
    * Database table name
    */
    protected $table = 'users';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'email',
'password',
'email_verified_at'];

    /**
    * Date time columns.
    */
    protected $dates=['email_verified_at'];




}
