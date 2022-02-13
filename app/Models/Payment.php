<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payments';

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
    protected $fillable = ['total', 'user_id', 'order_id', 'slip'];
public function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id'); 
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id'); 
    }

    
}
