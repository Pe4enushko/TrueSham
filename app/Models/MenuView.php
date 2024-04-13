<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuView
 * 
 * @property int $Code_mv
 * @property string $Name_mv
 *
 * @package App\Models
 */
class MenuView extends Model
{
	protected $table = 'menu_view';
	protected $primaryKey = 'Code_mv';
	public $timestamps = false;

	protected $fillable = [
		'Name_mv'
	];
}
