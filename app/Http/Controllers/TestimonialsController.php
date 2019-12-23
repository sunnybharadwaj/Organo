<?php

namespace Organo\Http\Controllers;

use Organo\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{

    public function index()
    {
        $data = Testimonial::all();
        return view('admin.pages.testimonials.index' , compact('data'));
    }

    public function create()
    {
        return view('admin.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "quote" => ["required"],
            "name" => "required",
            "cred" => "required",
            "active" => "required"
        ]);

        Testimonial::create($validatedData);
        return redirect('/admin/testimonials');
    }

    public function show($id)
    {
        $currentTestimonial = Testimonial::all()->find($id);
        return view('admin.pages.testimonials.show', compact('currentTestimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Organo\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentTestimonial = Testimonial::all()->find($id);
        return view('admin.pages.testimonials.edit', compact('currentTestimonial'));
    }

    public function update($id, Request $request)
    {
        $currentTestimonial = Testimonial::find($id);;
        $validatedData = $request->validate([
            "quote" => ["required"],
            "name" => "required",
            "cred" => "required",
            "active" => "",
        ]);

        $validatedData = (object)$validatedData;
        $currentTestimonial->quote = $validatedData->quote;
        $currentTestimonial->name = $validatedData->name;
        $currentTestimonial->cred = $validatedData->cred;

        $currentTestimonial->save();

        return redirect('/admin/testimonials');
    }

    public function destroy($id)
    {
        Testimonial::all()->find($id)->delete();
        return redirect('/admin/testimonials');
    }
}
