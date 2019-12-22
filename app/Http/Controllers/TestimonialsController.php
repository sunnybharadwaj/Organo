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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "quote" => ["required"],
            "name" => "required",
            "who" => "required",
        ]);

        Member::create($validatedData);

        return redirect('/admin/testimonials');
    }

    public function show($id, Testimonial $testimonial)
    {
        $currentTestimonial = $testimonial->find($id);
        return view('admin.pages.testimonials.show', compact('currentTestimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Organo\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Testimonial $testimonial)
    {
        $currentTestimonial = $testimonial->find($id);
        return view('admin.pages.testimonials.edit', compact('currentTestimonial'));
    }

    public function update($id, Request $request, Testimonial $testimonial)
    {
        $currentTestimonial = Testimonial::find($id);;
        $validatedData = $request->validate([
            "quote" => ["required"],
            "name" => "required",
            "who" => "required",
        ]);

        $validatedData = (object)$validatedData;
        $currentTestimonial->quote = $validatedData->quote;
        $currentTestimonial->name = $validatedData->name;
        $currentTestimonial->who = $validatedData->who;

        $currentTestimonial->save();

        return redirect('/admin/testimonials');
    }

    public function destroy($id, Testimonial $testimonial)
    {
        $testimonial->find($id)->delete();
        return redirect('/admin/testimonials');
    }
}
