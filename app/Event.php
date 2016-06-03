<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['titulo', 'fecha_event', 'descripccion','numEntradas','user_id'];

    public function location()
    {
        return $this->hasMany('App\Location');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
