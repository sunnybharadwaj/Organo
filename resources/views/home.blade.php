@extends('layouts.admin')

@section('content')
    {{--<div class="card-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success" role="alert">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}
    {{--You are logged in!--}}
    {{--</div>--}}

    <div id="dashboard">
        <div class="container">
            <h3>Manage:</h3>
            <ul>
                <li><a href="/admin/team"><h2>Team</h2></a></li>
                <li><a href="/admin/testimonial"><h2>Testimonials</h2></a></li>
                <li><a href="/admin/gallery"><h2>Gallery</h2></a></li>
                <li><a href="/admin/blog"><h2>Blog</h2></a></li>
                <li><a href="/admin/press"><h2>Press</h2></a></li>
                <li><a href="/admin/forms"><h2>Forms</h2></a></li>
            </ul>
        </div>
    </div>
@endsection
