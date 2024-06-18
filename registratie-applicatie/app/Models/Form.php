<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
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
        'fileInput'
    ];
}
