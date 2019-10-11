<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Like
 * @package App\Models
 * @version October 10, 2019, 7:04 pm UTC
 *
 * @property string to
 * @property string from
 */
class Like extends Model
{
    use SoftDeletes;

    public $table = 'likes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'to',
        'from'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'to' => 'string',
        'from' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
