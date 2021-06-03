<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    public function user ()
    {
        return $this->hasone(User::class,'id','user_id');
    }

    public function parque ()
    {
        return $this->hasone(Location::class,'id','park');
    }
}
