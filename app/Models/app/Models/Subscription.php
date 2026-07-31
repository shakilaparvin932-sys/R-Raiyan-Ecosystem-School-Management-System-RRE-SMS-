<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'package_id',
        'amount',
        'payment_method',
        'transaction_id',
        'status',
        'start_date',
        'end_date',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
