<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sector;
use Webpatser\Countries\Countries;

class ClientController extends Controller
{
    public function list() {
        $clients = Client::all();
        return view('admin.clients.list', compact('clients'));
    }

    public function create() {
        $method = 'post';
        $client = new Client();
        $sectors = Sector::all();
        $countries = Countries::all();
        return view('admin.clients.client-form', compact('method', 'client', 'countries', 'sectors'));
    }
}
