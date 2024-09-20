<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
