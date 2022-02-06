<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

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
    protected $fillable = ['brand', 'serie', 'color', 'year', 'mileage', 'user_id'];
 
    public function user(){
       return $this->belongsTo(User::class, 'user_id', 'id');
   }

    
}
