<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['titulo', 'fecha_event', 'descripccion','numEntradas'];
}
