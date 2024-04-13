<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_ufm Name ufm
@property varchar $Designation Designation
@property \Illuminate\Database\Eloquent\Collection $dish belongsToMany
   
 */
class Ufm extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'ufm';

    /**
    * Mass assignable columns
    */
    protected $fillable=['Designation',
'Name_ufm',
'Designation'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * dishes
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function dishes()
    {
        return $this->belongsToMany(Dish::class,'dish');
    }



}