<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    protected $fillable = [
    'surname',
    'other_name',
    'email',
    'position',
    'contact',
    'photo',
    'description',
    'company',
    'state_of_origin',
    'country',
    'date_of_birth',
    'qualification',
    'discipline',
    'experience',
    'status'
    ];
}