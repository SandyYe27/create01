<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product_img;
use App\Models\ShoppingCart;



class Good extends Model
{
    // use HasFactory;
    protected $table = 'goods';

    protected $primaryKey = 'id';

    protected $fillable = ['img_path', 'product_name', 'product_price', 'product_amount', 'product_description', 'created_at', 'updated_at',];


    //每一筆商品資料

    public function imgs(){
        //可以有很多張次要圖片
        //hasOne /hasMany格式（對照的Model::class,'對方的欄位','自己的欄位'）
        return $this->hasMany(Product_img::class,'product_id','id');//因為是hasMany 所以使用時會輸出陣列
    }

    public function shoppingCart(){
        //可以同時存在很多個購物明細中
        return $this->hasMany(ShoppingCart::class,'product_id','id');
    }

}
