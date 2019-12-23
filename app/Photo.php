<?php

namespace Organo;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    var $guarded = [];
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
