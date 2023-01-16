<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Genres
 * @package App\Models
 * @version January 15, 2023, 4:00 pm UTC
 *
 * @property string $genre
 * @property string $slug
 */
class Genres extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'genres';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'genre',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'genre' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'genre' => 'required'
    ];

    public function films(){
        return $this->belongsToMany(Films::class);
    }

    
}
