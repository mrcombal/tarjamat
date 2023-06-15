<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    public function list() {
        $skills = Skill::all();
        return view('admin.skills.list', compact('skills'));
    }

    public function create() {
        $method = 'post';
        $skill = new Skill();
        return view('admin.skills.skill-form', compact('method', 'skill'));
    }

    public function store(StoreSkillRequest $request) {
        $skill = Skill::create($request->all());
        return redirect()->route('skill.list')->with('message', $skill->name.' skill has been added!');
    }

    public function edit($id) {
        $skill = Skill::find($id);
        if(!$skill)
            abort(404);
        return view('admin.skills.skill-form', [
            'skill'     => $skill,
            'method'    => 'put',
        ]);
    }

    public function update($id, UpdateSkillRequest $request) {
        $skill = Skill::find($id);
        if(!$skill)
            abort(404);;
        $skill->update($request->all());
        return redirect()->back()->with('message', "Skill has been updated.");
    }


}
