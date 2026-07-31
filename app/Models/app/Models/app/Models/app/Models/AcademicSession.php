<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'session_year',
        'is_default',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
