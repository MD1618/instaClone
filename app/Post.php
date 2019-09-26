<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];// only safe when fields are defined in validation

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
