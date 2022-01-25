<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'dob',
        'gender',
        'id_card',
        'date_in',
        'graduate',
        'position',
        'salary',
        'phone',
        'address',
        'image'
    ];

}
