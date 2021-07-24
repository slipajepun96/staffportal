<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estate;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use HasFactory;

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_no',
        'model',
        'engine_no',
        'chassis_no',
        'price',
        'date_of_purchase',
        'date_of_roadtax_expired',
        'active',
        'fuel_type',
        'official_car',
        'estate_id',
        'official_car_of',
        'active'

    ];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
