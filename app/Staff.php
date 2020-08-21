<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //ชื่อตารางในฐานข้อมูล
protected $table = "Staffs";
//ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
protected $fillable = ["Name","Age","Salary","Phone",];    
//Primary Key
 	protected $primaryKey = "id";

}
