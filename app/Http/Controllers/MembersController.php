<?php

namespace Organo\Http\Controllers;

use Organo\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{

    public function index()
    {
        $data = Member::all();
        return view('admin.pages.team.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.pages.team.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "imagepath" => ["required"],
            "name" => "required",
            "role" => "required",
            "linkedin" => "required",
            "description" => "required",
            "active" => "required"
        ]);

        $image_upload = $request->file('imagepath');
        $image_path = $image_upload->store('admin/team', ['disk' => 'public']);
        $validatedData = (object)$validatedData;
//        dd($image_path);
        $validatedData->imagepath = $image_path;
        $validatedData = (array)$validatedData;
        Member::create($validatedData);

        return redirect('/admin/team');
    }

    public function show($id, Member $member)
    {
        $currentMember = $member->find($id);
        return view('admin.pages.team.show', compact('currentMember'));
    }

    public function edit($id, Member $member)
    {
        $currentMember = $member->find($id);
        return view('admin.pages.team.edit', compact('currentMember'));
    }

    public function update($id, Request $request, Member $member)
    {
        $currentMember = Member::find($id);

        $validatedData = $request->validate([
            "imagepath" => "nullable",
            "name" => "required",
            "role" => "required",
            "linkedin" => "required",
            "description" => "required",
            "active" => "required"
        ]);

        $validatedData = (object)$validatedData;
        $currentMember->name = $validatedData->name;
        $currentMember->role = $validatedData->role;
        $currentMember->linkedin = $validatedData->linkedin;
        $currentMember->description = $validatedData->description;

        if(($request->imagepath)) {
            $image_upload = $request->file('imagepath');
            $image_path = $image_upload->store('admin/team', ['disk' => 'public']);
//            Delete image
            unlink(public_path('/storage/' . $currentMember->imagepath));
            $currentMember->imagepath = $image_path;

        }

        $currentMember->save();

        return redirect('/admin/team/');
    }

    public function destroy($id, Member $member)
    {
        $member->find($id)->delete();
        return redirect('/admin/team');
    }
}
