<?php

namespace App\Models;

use App\Http\Requests\StoreProjectRequestRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectRequest;

class ProjectRequestController extends Model
{
    use HasFactory;

    public function create() {
        return view('client.request-form');
    }

    public function store(StoreProjectRequestRequest $request) {
        return $request->all();
    }
}
