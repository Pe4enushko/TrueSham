<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeOfDish
 *
 * @property int $Code_tod
 * @property string $Name_tod
 *
 * @property Collection|Dish[] $dishes
 *
 * @package App\Models
 */
class TypeOfDish extends Model
{
    use HasFactory;
	protected $table = 'type_of_dish';
	protected $primaryKey = 'Code_tod';
	public $timestamps = false;

	protected $fillable = [
		'Name_tod'
	];

	public function dishes()
	{
		return $this->hasMany(Dish::class, 'Code_tod');
	}
}
