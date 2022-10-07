<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Khalyomede\EloquentUuidSlug\Sluggable;

class Popup extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['name','email','sujet','popup_content','popupgroup_id','enable','default','email_subject','email','email_content'];

    public function popupgroup(){
        return $this->belongsTo(PopupGroup::class);
    }
}
