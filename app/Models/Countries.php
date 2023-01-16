<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    
    public $table = 'countries';

    public function films()
    {
        return $this->hasMany(Films::class, 'country','id');
    }
}
