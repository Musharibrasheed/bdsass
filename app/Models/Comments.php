<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comments
 * @package App\Models
 * @version January 16, 2023, 7:19 pm UTC
 *
 * @property string $name
 * @property string $comments
 */
class Comments extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'comments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'comments',
        'films_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'comments' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'comments' => 'required'
    ];

    
}
