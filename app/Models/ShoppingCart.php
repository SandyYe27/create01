<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modles\Good;
use App\Modles\User;


/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $product_id
 * @property integer $user_id
 * @property integer $qty
 */
class ShoppingCart extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'product_id', 'user_id', 'qty'];

    //商品關聯
    //每一筆使用者想購買的物品
    public function product(){
        //一定是店裡的某一個商品
        return $this->hasOne(Good::class,'id','product_id');
    }

    //使用者關聯
    //一個購物車有一個使用者 一對一
    public function user(){
        //一定屬於某一個使用者
        //belongsTo /belongsToMany  格式（對照的Model::class,'自己的欄位','對方的欄位'）
        return $this->belongsTo(Good::class,'user_id','id');
        //這編寫belongsTo，對方就會寫hasMany
    }
}
