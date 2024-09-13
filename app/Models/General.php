<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class General extends Model
{
    use HasFactory,HasUuids,Notifiable;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function relative(){
        return $this->hasMany('App\Models\Relative','general_id');
    }

    public function employment(){
        return $this->hasMany('App\Models\Employment','general_id');
    }

    public function education(){
        return $this->hasMany('App\Models\Education','general_id');
    }
}
