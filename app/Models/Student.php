<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surename',
        'studentid',
        'date_of_birth',
        'date_of_enrolled',
        'image'
    ];

    protected $table='students';

}
