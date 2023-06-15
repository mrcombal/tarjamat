<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Countries\Countries;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_file', 'country_id', 'type'];

    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function country() {
        return $this->belongsTo(Countries::class);
    }
}
