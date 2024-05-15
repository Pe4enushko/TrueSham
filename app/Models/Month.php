<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_month Name months
@property \Illuminate\Database\Eloquent\Collection $menu belongsToMany

 */
class Month extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'month';
    public $timestamps=false;
    /**
    * Mass assignable columns
    */
    protected $fillable=['Name_month',
'Name_month'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * menus
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function menus()
    {
        return $this->belongsToMany(Menu::class,'Menu');
    }



}
