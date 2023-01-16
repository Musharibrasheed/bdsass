<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Films
 * @package App\Models
 * @version January 15, 2023, 6:07 pm UTC
 *
 * @property string $film
 * @property string $description
 * @property string $release_date
 * @property string $rating
 * @property number $ticket_price
 * @property integer $counrty
 * @property string $photo
 */
class Films extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'films';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'film',
        'description',
        'release_date',
        'rating',
        'ticket_price',
        'country',
        'photo',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'film' => 'string',
        'description' => 'string',
        'release_date' => 'date',
        'rating' => 'string',
        'ticket_price' => 'decimal:2',
        'country' => 'integer',
        'photo' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'film' => 'required',
        'description' => 'required',
        'release_date' => 'required',
        'rating' => 'required',
        'ticket_price' => 'required',
        'country' => 'required',
        'photo' => 'required'
    ];

    public function genres(){
        return $this->belongsToMany(Genres::class);
    }

    public function related_country()
    {
        return $this->belongsTo(Countries::class,'country','id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class,'films_id','id');
    }
    
}
