<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'vendor_id', 'expires_in'];

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
