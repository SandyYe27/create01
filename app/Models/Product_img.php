<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img_path
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product_img extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $table = 'product_imgs';

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'product_id', 'created_at', 'updated_at'];


    //每一張次要商品圖片
    public function product(){

        //hasOne /hasMany  格式（對照的Model::class,'對方的欄位','自己的欄位'）
        // $this->hasOne(Good::class,'id','product_id');

        
        //只屬於某一個特定商品
        //belongsTo /belongsToMany  格式（對照的Model::class,'自己的欄位','對方的欄位'）
        $this->belongsTo(Good::class,'product_id','id');
    }
}
