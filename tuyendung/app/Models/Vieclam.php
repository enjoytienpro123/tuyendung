<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vieclam extends Model
{
    protected $table ='vieclams';

    protected $fillable = [
        'title',
        'company',
        'logo',
        'description',
        'requirements',
        'benefits',
        'company_info',
        'location',
        'salary_min',
        'salary_max',
        'type',
        'deadline',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'salary_min' =>'float',
        'salary_max' => 'float',
        'deadline' => 'date',
    ];
    //
}
