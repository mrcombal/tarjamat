<?php

namespace App\Http\Controllers;

use App\Models\GenericContent;
use Illuminate\Http\Request;

class GenericContentController extends Controller
{
    public function index()
    {
        $contents = GenericContent::all();
        return response()->json($contents);
    }

    public function store(Request $request)
    {
        $content = GenericContent::create($request->all());
        return response()->json($content, 201);
    }

    public function show($id)
    {
        $content = GenericContent::find($id);
        return response()->json($content);
    }

    public function update(Request $request, $id)
    {
        $content = GenericContent::find($id);
        $content->update($request->all());
        return response()->json($content);
    }

    public function destroy($id)
    {
        $content = GenericContent::find($id);
        $content->delete();
        return response()->json(null, 204);
    }
}
