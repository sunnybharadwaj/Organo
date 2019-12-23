<?php

namespace Organo\Http\Controllers;

use Organo\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Video::all();

        return view('admin.pages.videos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.videos.create');
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
            "title" => ["required"],
            "url" => "required",
            "active" => "required"
        ]);

        Video::create($validatedData);

        return redirect('/admin/videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Organo\Video $pressPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Video::all()->find($id);
        return view('admin.pages.videos.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Organo\Video $videosPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Video::all()->find($id);
        return view('admin.pages.videos.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Organo\Video $pressPost
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = Video::find($id);
        $validatedData = $request->validate([
            "title" => ["required"],
            "url" => "required",
            "active" => "required"
        ]);

        $validatedData = (object)$validatedData;
        $data->title = $validatedData->title;
        $data->url = $validatedData->url;

        $data->save();
        return redirect('/admin/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Organo\Video $pressPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::all()->find($id)->delete();
        return redirect('/admin/videos');
    }
}
