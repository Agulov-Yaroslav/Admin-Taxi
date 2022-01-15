<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDriver extends Model
{
    protected $fillable = ['driver_id', 'car_id'];
    use HasFactory;
}
