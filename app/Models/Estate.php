<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Estate extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function carRequests()
    {
        return $this->hasMany(CarRequest::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
