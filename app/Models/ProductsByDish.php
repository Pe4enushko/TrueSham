<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
   @property int $ufm_id ufm id
@property int $dish_id dish id
@property int $product_count product count
@property Dish $dish belongsTo

 */
class ProductsByDish extends Model
{
    use HasFactory;
    /**
    * Database table name
    */
    protected $table = 'products_by_dish';
    public $timestamps=false;
    /**
    * Mass assignable columns
    */
    protected $fillable=['product_count',
'ufm_id',
'dish_id',
'product_count'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * dish
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function dish()
    {
        return $this->belongsTo(Dish::class,'dish_id');
    }




}
