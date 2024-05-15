<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property int $month_id month id
@property date $menu_date menu date
@property int $menu_type_id menu type id
@property int $dish_count dish count
@property MenuType $menuType belongsTo
@property Month $month belongsTo

 */
class Menu extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'Menu';

    /**
    * Mass assignable columns
    */
    protected $fillable=['dish_id',
'dish_count',
'month_id',
'menu_date',
'menu_type_id',
'dish_count'];

    /**
    * Date time columns.
    */
    protected $dates=['menu_date'];

    public $timestamps=false;

    public function dish()
    {
        return $this->belongsTo(Dish::class, 'dish_id');
    }

    /**
    * menuType
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function menuType()
    {
        return $this->belongsTo(MenuType::class,'menu_type_id');
    }

    /**
    * month
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function month()
    {
        return $this->belongsTo(Month::class,'month_id');
    }




}
