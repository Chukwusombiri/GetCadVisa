<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Business extends Model
{
    use HasFactory,HasUuids,Notifiable;

    public function work(){
        return $this->hasMany('App\Models\Work','business_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
