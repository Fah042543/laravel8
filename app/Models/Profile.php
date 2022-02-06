<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

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
    protected $fillable = ['no', 'type', 'issue_date', 'expire_date', 'name', 'birth_date', 'id_no', 'user_id'];

    public function user(){
       return $this->belongsTo(User::class, 'user_id', 'id');
   }

    
}
