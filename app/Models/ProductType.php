<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductType
 *
 * @property int $Code_pt
 * @property string $Name_pt
 *
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class ProductType extends Model
{
    use HasFactory;
	protected $table = 'product_type';
	protected $primaryKey = 'Code_pt';
	public $timestamps = false;

	protected $fillable = [
		'Name_pt'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'Code_pt');
	}
}
