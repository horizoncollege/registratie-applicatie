<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'place',
        'contactperson',
        'function',
        'phone',
        'email',
        'website',
        'activity',
        'workers',
        'kvk_number',
        'status',
        'fileInput',
    ];
}
