<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class SettingEmail extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'subject', 'content','slug','apikey','secretkey','host','port','username','password','from_address'
    ];
}
