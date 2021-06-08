<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streaming extends Model
{
    


    public function user ()
    {
        return $this->hasone(User::class,'id','user_id');
    }

    public function servicio ()
    {
        return $this->hasone(Servicios::class,'id','servicios_id');
    }
}
