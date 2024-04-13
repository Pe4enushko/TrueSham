<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuType
 *
 * @property int $Code_mt
 * @property string $Name_mt
 *
 * @property Menu $menu
 *
 * @package App\Models
 */
class MenuType extends Model
{
    use HasFactory;
	protected $table = 'menu_type';
	protected $primaryKey = 'Code_mt';
	public $timestamps = false;

	protected $fillable = [
		'Name_mt'
	];

	public function menu()
	{
		return $this->hasOne(Menu::class);
	}
}
