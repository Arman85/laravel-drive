<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gallery
 * @package App\Models
 * @version June 10, 2019, 10:13 am UTC
 *
 * @property string name
 * @property string img
 */
class Gallery extends Model
{
    use SoftDeletes;

    public $table = 'galleries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
