<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['order_id', 'product_id', 'user_id', 'quantity', 'price', 'total'];
public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id'); 
    }

    public function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id'); 
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id'); 
    }

    
}
