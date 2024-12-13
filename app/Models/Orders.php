<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_name',
        'quantity',
        'price',
        'status',
        'notes',
    ];

    // Define the relationship to the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

