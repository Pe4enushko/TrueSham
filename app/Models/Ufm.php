<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ufm
 *
 * @property int $Code_ufm
 * @property string $Name_ufm
 * @property string $Designation
 *
 * @property Collection|Dish[] $dishes
 *
 * @package App\Models
 */
class Ufm extends Model
{
    use HasFactory;
	protected $table = 'ufm';
	protected $primaryKey = 'Code_ufm';
	public $timestamps = false;

	protected $fillable = [
		'Name_ufm',
		'Designation'
	];

	public function dishes()
	{
		return $this->hasMany(Dish::class, 'Code_ufm');
	}
}
