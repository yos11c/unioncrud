<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    protected $table='transportes';
    public function camiones(){
        return $this->hasMany('App\Models\camion');
    }

}
