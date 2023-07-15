<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use Carbon\Carbon;
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

    public function verify(Request $request) {
        if($request->has('id')) {
            $admin = auth()->guard('admin')->user();
            $id = $request->get('id');
            $candidate = Candidate::find($id);
            $candidate->verified_at = now('Asia/Kuwait');
            $candidate->admin_id = $admin->id;
            $candidate->save();
            return response()->json(['response' => true, 'msg' => 'Candidate is verified']);
        } else {
            return response()->json(['response' => false, 'msg' => 'Candidate ID is missing.', 'data' => $request->all()]);
        }
    }
}
