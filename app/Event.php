<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'theme', 'date'
    ];

    public $timestamps = false;

    public function EventGuest()
    {
   
        return $this->hasMany(EventGuest::class);
    }
}
