<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['user_id','carnet','nombre', 'apP', 'apM','telefono','fechaNac'];
}
