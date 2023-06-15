<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tagline', 'email', 'mobile', 'gender', 'country_id'];

    public function skills() {
        return $this->belongsToMany(Skill::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class)->withPivot('experience', 'tier');
    }
}
