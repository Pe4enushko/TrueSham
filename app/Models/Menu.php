<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $dish_id
 * @property int $month_id
 * @property Carbon $menu_date
 * @property int $menu_type_id
 * @property int $dish_count
 * 
 * @property Dish $dish
 * @property MenuType $menu_type
 * @property Month $month
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'Menu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dish_id' => 'int',
		'month_id' => 'int',
		'menu_date' => 'datetime',
		'menu_type_id' => 'int',
		'dish_count' => 'int'
	];

	protected $fillable = [
		'dish_id',
		'month_id',
		'menu_date',
		'menu_type_id',
		'dish_count'
	];

	public function dish()
	{
		return $this->belongsTo(Dish::class);
	}

	public function menu_type()
	{
		return $this->belongsTo(MenuType::class);
	}

	public function month()
	{
		return $this->belongsTo(Month::class);
	}
}
