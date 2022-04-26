<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $img_path
 * @property string $img_opacity
 * @property integer $weith
 */
class Banner extends Model
{
    protected $table ='banners';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    // protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'img_opacity', 'weith'];
    // protected $fillable = ['created_at', 'updated_at', 'img_path', 'img_opacity', 'weith'];

}
