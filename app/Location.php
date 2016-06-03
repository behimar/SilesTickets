<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = ['localidad', 'cantidad', 'precio', 'event_id'];
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
