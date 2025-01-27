<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $dateFormat = 'd/m/y';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
