<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsByDish
 * 
 * @property int $product_id
 * @property int $ufm_id
 * @property int $dish_id
 * @property int $product_count
 * 
 * @property Dish $dish
 * @property Product $product
 *
 * @package App\Models
 */
class ProductsByDish extends Model
{
	protected $table = 'products_by_dish';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'ufm_id' => 'int',
		'dish_id' => 'int',
		'product_count' => 'int'
	];

	protected $fillable = [
		'product_id',
		'ufm_id',
		'dish_id',
		'product_count'
	];

	public function dish()
	{
		return $this->belongsTo(Dish::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
