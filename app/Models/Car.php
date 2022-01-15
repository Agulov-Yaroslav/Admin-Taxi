<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['brand', 'number', 'color'];
    public function drivers(){
        return $this->belongsToMany(Driver::class, 'car_drivers');
    }
}
