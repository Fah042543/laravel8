<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
    protected $fillable = ['user_id', 'remark', 'total', 'status', 'checking_at', 'paid_at', 'cancelled_at', 'completed_at', 'tracking'];
public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id'); 
    }
    
    public function payment(){
        return $this->hasOne(Payment::class, 'order_id', 'id'); 
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class, 'order_id', 'id'); 
    }

    
}
