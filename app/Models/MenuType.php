<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_mt Name mt
@property \Illuminate\Database\Eloquent\Collection $menu belongsToMany

 */
class MenuType extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'menu_type';
    public $timestamps=false;
    /**
    * Mass assignable columns
    */
    protected $fillable=['Name_mt',
'Name_mt'];

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
