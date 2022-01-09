<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    use HasFactory;
    //ผูกกับตาราง covid19
    protected $table = "covid19s";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["date","country","total","active","death","recovered","total_in_1m","remark"];    
    //Primary Key
 	protected $primaryKey = "id";


}
