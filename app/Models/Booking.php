<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'subscribe_to_newsletter',
        'destination',
        'budget',
        'travel_date_option',
        'selected_month',
        'selected_day',
        'arrival_date',
        'departure_date',
        'selected_duration',
        'traveling_with',
        'number_of_children',
        'safari_preferences',
        'status',
        'package_id',
        'package_title',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'subscribe_to_newsletter' => 'boolean',
        'arrival_date' => 'date',
        'departure_date' => 'date',
    ];
}
