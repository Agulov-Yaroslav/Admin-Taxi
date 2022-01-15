<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Driver extends Model
{
    protected $fillable = ['name', 'phone', 'score'];
    use HasFactory;
    public function cars(){
        return $this->belongsToMany(Car::class);
    }
}
