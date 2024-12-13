<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'name',          // Customer's name
        'profile',       // Customer's profile image path
        'country',       // Customer's country
        'register_date', // Customer's registration date
        'email',         // Customer's email
        'phone',         // Customer's phone
        'total_order',   // Total order count
    ];
}
