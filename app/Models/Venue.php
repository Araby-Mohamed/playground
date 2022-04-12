<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    public $guarded=[''];

    public function events()
    {
        return $this->hasMany(Event::class, 'venue_id', 'id');
    }

    public function events_sum_deposit()
    {
        return $this->hasMany(Event::class, 'venue_id', 'id')->sum('deposit');
    }
}
