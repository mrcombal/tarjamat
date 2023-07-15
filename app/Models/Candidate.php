<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tagline', 'email', 'mobile', 'gender', 'country_id'];
    protected $casts = ['verified_at' => 'datetime'];

    public function skills() {
        return $this->belongsToMany(Skill::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class)->withPivot('experience', 'tier');
    }

    public function certificates() {
        return $this->belongsToMany(Certificate::class)->withPivot('certified_at');
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function getStatusAttribute() {
        return ($this->verified_at) ? 'Verified' : 'Pending Approval';
    }
}
