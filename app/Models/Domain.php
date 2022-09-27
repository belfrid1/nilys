<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class Domain extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name', 'apikey','slug'
    ];
}
