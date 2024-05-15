<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_pt Name pt
@property \Illuminate\Database\Eloquent\Collection $products hasMany

 */
class ProductType extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'product_type';
    public $timestamps=false;
    /**
    * Mass assignable columns
    */
    protected $fillable=['Name_pt',
'Name_pt'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * products
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function products()
    {
        return $this->hasMany(Product::class,'Code_pt');
    }



}
