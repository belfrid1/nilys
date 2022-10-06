<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class PopupGroupCondition extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['url','popup_id'];

    public function popup(){
        return $this->belongsTo(Popup::class);
    }
}
