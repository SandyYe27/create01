<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    // use HasFactory;
    protected $table = 'goods';

    protected $primaryKey = 'id';

    protected $fillable = ['img_path', 'product_name', 'product_price', 'product_amount', 'product_description', 'created_at', 'updated_at',];

    public function imgs(){
        //hasOne /hasMany格式（對照的Model::class,'對方的欄位','自己的欄位'）
        return $this->hasMany(Product_img::class,'product_id','id');//因為是hasMany 所以使用時會輸出陣列
    }

}
