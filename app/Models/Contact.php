<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'email', 'domain', 'url', 'popup_guid', 'popupgroup_guid'];

    // public function popupgroup(){
    //     return $this->belongsTo(PopupGroup::class);
    // }
}
