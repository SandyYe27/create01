<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;


    //使用資料庫表單名稱
    protected $table = 'comments';

    //資料表的主key通常是id（主key通常有所引的角色，有不可重複、會自動累加的特性）
    protected $primaryKey = 'id';

    //ｍodel可以使用黑名單 或 白名單（二選一）去設定可填寫的欄位
    protected $fillable = ['title','name','context','email']; //整張表格只有[]裡面列出來的可以被填寫。ex:表格裡面只有title、name、context和email可以被填寫
    //$fillable or $guarded只能選一個用
    // protected $guarded = ['created_at','updated_at','id'];//[]裡面列出來的不能被填寫，這3個以外的都可以被填寫


}
