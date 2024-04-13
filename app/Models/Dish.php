<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dish
 *
 * @property int $Code_dish
 * @property int $Code_ufm
 * @property string $Name_dish
 * @property string $Description
 * @property int $Calorie
 * @property int $Price
 * @property int $Code_tod
 *
 * @property TypeOfDish $type_of_dish
 * @property Ufm $ufm
 * @property Menu $menu
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Dish extends Model
{
    use HasFactory;
	protected $table = 'dish';
	protected $primaryKey = 'Code_dish';
	public $timestamps = false;

	protected $casts = [
		'Code_ufm' => 'int',
		'Calorie' => 'int',
		'Price' => 'int',
		'Code_tod' => 'int'
	];

	protected $fillable = [
		'Code_ufm',
		'Name_dish',
		'Description',
		'Calorie',
		'Price',
		'Code_tod'
	];

	public function type_of_dish()
	{
		return $this->belongsTo(TypeOfDish::class, 'Code_tod');
	}

	public function ufm()
	{
		return $this->belongsTo(Ufm::class, 'Code_ufm');
	}

	public function menu()
	{
		return $this->hasOne(Menu::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'products_by_dish')
					->withPivot('ufm_id', 'product_count');
	}
}
