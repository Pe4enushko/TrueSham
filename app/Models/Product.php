<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $Name_product Name product
@property int $Code_pt Code pt
@property CodePt $productType belongsTo
@property \Illuminate\Database\Eloquent\Collection $sbydish belongsToMany

 */
class Product extends Model
{

    /**
    * Database table name
    */
    protected $table = 'product';

    /**
    * Mass assignable columns
    */
    protected $fillable=['Code_pt',
'Name_product',
'Code_pt'];

    protected $primaryKey='Code_product';
    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * codePt
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function codePt()
    {
        return $this->belongsTo(ProductType::class,'Code_pt');
    }

    /**
    * sbydishes
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function sbydishes()
    {
        return $this->belongsToMany(Sbydish::class,'products_by_dish');
    }



}
