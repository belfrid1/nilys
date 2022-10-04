<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class SettingApi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'website_url','slug'
    ];
}
