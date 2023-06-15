<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AjaxController extends Controller {

    public function delete(Request $request) {
        if($request->has('id') && $request->has('model')) {
            $id     = $request->get('id');
            $model  = "App\\Models\\".$request->get('model');
            $instance = $model::find($id);
            $model::destroy($id);
            return response()->json(['response' => true, 'msg' => 'Object has been deleted successfully.']);
        } else {
            return response()->json(['response' => false, 'msg' => 'ID or Model is missing.', 'data' => $request->all()]);
        }
    }
}
