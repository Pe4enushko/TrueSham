<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_ufm Name ufm
@property varchar $Designation Designation
@property \Illuminate\Database\Eloquent\Collection $dish hasMany

 */
class Ufm extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'ufm';
    public $timestamps=false;
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
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function dishes()
    {
        return $this->hasMany(Dish::class,'Code_ufm');
    }



}
