<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Month
 *
 * @property int $Code_month
 * @property string $Name_month
 *
 * @property Menu $menu
 *
 * @package App\Models
 */
class Month extends Model
{
    use HasFactory;
	protected $table = 'month';
	protected $primaryKey = 'Code_month';
	public $timestamps = false;

	protected $fillable = [
		'Name_month'
	];

	public function menu()
	{
		return $this->hasOne(Menu::class);
	}
}
