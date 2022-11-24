<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable=['region'];

    public function countries(){
        return $this->hasMany(Country::class);
    }
    public function rayons(){
        return $this->hasMany(Rayon::class);
    }
}