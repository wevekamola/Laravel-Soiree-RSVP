<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventGuest extends Model
{
	protected $fillable = [
        'event_id', 'guest_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
