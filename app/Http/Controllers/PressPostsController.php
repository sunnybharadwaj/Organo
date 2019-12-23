<?php

namespace Organo\Http\Controllers;

use Organo\PressPost;
use Illuminate\Http\Request;

class PressPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PressPost::all();
        return view('admin.pages.press.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "headline" => ["required"],
            "url" => "required",
            "active" => "required"
        ]);

        PressPost::create($validatedData);

        return redirect('/admin/press');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Organo\PressPost $pressPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PressPost::all()->find($id);
        return view('admin.pages.press.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Organo\PressPost $pressPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PressPost::all()->find($id);
        return view('admin.pages.press.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Organo\PressPost $pressPost
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = PressPost::find($id);
        $validatedData = $request->validate([
            "headline" => ["required"],
            "url" => "required",
            "active" => "required"
        ]);

        $validatedData = (object)$validatedData;
        $data->quote = $validatedData->headline;
        $data->name = $validatedData->url;

        $data->save();
        return redirect('/admin/press');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Organo\PressPost $pressPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PressPost::all()->find($id)->delete();
        return redirect('/admin/press');
    }
}
