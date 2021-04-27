<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'assistence';
    protected $fillable = ['hora', 'sector', 'ubicacio','park','userid'];

    public function user ()
    {
        return $this->hasone(User::class,'id','user_id');
    }

    public function parque ()
    {
        return $this->hasone(Location::class,'id','park');
    }
}
