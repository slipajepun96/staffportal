<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estate;
use App\Models\Car;
use App\Models\User;

use Illuminate\Notifications\Notifiable;

class CarRequest extends Model
{
    use HasFactory,Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'user_id',
    'car_id',
    'estate_id',
    'planned_start_datetime',
    'planned_end_datetime',
    'destination',
    'journey_description',
    'approved_datetime',
    'active',
    'status',
    'approved_by'

    ];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
