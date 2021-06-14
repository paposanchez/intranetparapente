<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes;

class Servicios extends Model
{

   
    public function user ()
    {
        return $this->hasone(User::class,'id','user_id');
    }

    public function parque ()
    {
        return $this->hasone(Location::class,'id','establecimiento');
    }
    
    public function transmision ()
    {
        return $this->hasone(Streaming::class,'servicio_id','id');
    }
    

    use SoftDeletes;
}
