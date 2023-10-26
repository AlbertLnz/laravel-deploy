<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableDate extends Model
{
    use HasFactory;
    protected $table = 'available_dates';
    
    protected $fillable = [
        'restaurant_id',
        'day',
        'hour_start',
        'hour_end',
        'isFull?',
    ];

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }

    public function reservation_tables()
    {
        return $this->belongsToMany('App\Models\ReservationTable');
    }
}