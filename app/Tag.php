<?php

namespace Organo;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    var $guarded = [];
    public function photos() {
        return $this->belongsToMany(Photo::class);
    }
}
