<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_tod Name tod
@property \Illuminate\Database\Eloquent\Collection $dish hasMany

 */
class TypeOfDish extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'type_of_dish';
    public $timestamps=false;
    /**
    * Mass assignable columns
    */
    protected $fillable=['Name_tod'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * dishes
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function dishes()
    {
        return $this->hasMany(Dish::class,'Code_tod');
    }



}
