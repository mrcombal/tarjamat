<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    use HasFactory;

    protected $fillable = ['client', 'email', 'start_date', 'end_date', 'language', 'brief', 'nationalities', 'daily_rate', 'days', 'has_cvs', 'has_outlines'];
}
