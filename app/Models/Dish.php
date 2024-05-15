<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property int $Code_ufm Code ufm
@property varchar $Name_dish Name dishes
@property varchar $Description Description
@property int $Calorie Calorie
@property int $Price Price
@property int $Code_tod Code tod
@property CodeTod $typeOfDish belongsTo
@property CodeUfm $ufm belongsTo
@property \Illuminate\Database\Eloquent\Collection $menu belongsToMany
@property \Illuminate\Database\Eloquent\Collection $productsby belongsToMany

 */
class Dish extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'dish';

    /**
    * Mass assignable columns
    */
    protected $fillable=['Code_tod',
'Code_ufm',
'Name_dish',
'Description',
'Calorie',
'Price',
'Code_tod'];

    /**
    * Date time columns.
    */
    protected $dates=[];
    public $timestamps=false;
    /**
    * codeTod
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function codeTod()
    {
        return $this->belongsTo(TypeOfDish::class,'Code_tod');
    }

    /**
    * codeUfm
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function codeUfm()
    {
        return $this->belongsTo(Ufm::class,'Code_ufm');
    }

    /**
    * menus
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function menus()
    {
        return $this->belongsToMany(Menu::class,'Menu');
    }
    /**
    * productsbies
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function productsbies()
    {
        return $this->belongsToMany(Productsby::class,'products_by_dish');
    }



}
