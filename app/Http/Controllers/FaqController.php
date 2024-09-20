<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faq::create($request->all());
        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully');
    }

    public function show($id)
    {
        $faq = Faq::find($id);
        return view('faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->update($request->all());
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully');
    }
}
