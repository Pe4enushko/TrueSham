<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_pt Name pt
@property \Illuminate\Database\Eloquent\Collection $product belongsToMany
   
 */
class ProductType extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'product_type';

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
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function products()
    {
        return $this->belongsToMany(Product::class,'product');
    }



}