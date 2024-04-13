<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_tod Name tod
@property \Illuminate\Database\Eloquent\Collection $dish belongsToMany
   
 */
class TypeOfDish extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'type_of_dish';

    /**
    * Mass assignable columns
    */
    protected $fillable=['Name_tod',
'Name_tod'];

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