<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function GuestEvent()
    {
        return $this->hasMany(EventGuest::class);
    }

}
