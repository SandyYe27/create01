<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    // use HasFactory;
    protected $table = 'goods';

    protected $primaryKey = 'id';

    protected $fillable = ['img_path', 'product_name', 'product_price', 'product_amount', 'product_description', 'created_at', 'updated_at',];


}
