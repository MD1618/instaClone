<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];


    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/QpMmYFfI9XEW8Hk9qm6NOcyjlnBX0Y1qaFAvEVll.jpeg';
        return $imagePath;
    }


    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
