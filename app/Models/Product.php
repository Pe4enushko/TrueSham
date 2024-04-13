<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $Code_product
 * @property string $Name_product
 * @property int $Code_pt
 *
 * @property ProductType $product_type
 * @property Collection|Dish[] $dishes
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;
	protected $table = 'product';
	protected $primaryKey = 'Code_product';
	public $timestamps = false;

	protected $casts = [
		'Code_pt' => 'int'
	];

	protected $fillable = [
		'Name_product',
		'Code_pt'
	];

	public function product_type()
	{
		return $this->belongsTo(ProductType::class, 'Code_pt');
	}

	public function dishes()
	{
		return $this->belongsToMany(Dish::class, 'products_by_dish')
					->withPivot('ufm_id', 'product_count');
	}
}
