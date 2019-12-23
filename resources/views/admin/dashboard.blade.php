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
        <div class="admin-wrapper">
            <div class="container">
                <div class="flex p-8 flex-wrap">
                    <div class="w-1/3">
                        <a href="/admin/team">
                            <div class="admin-h-card mx-3">
                                <div class="top-div pt-4 mb-2 ">
                                    <div class="icon">
                                        <img src="/static/admin/icons/team_admin.svg" alt="">
                                    </div>
                                </div>
                                <div class="text text-center px-4 py-8">
                                    <div class="title">
                                        <h2>Team List</h2>

                                    </div>
                                    <p class="small-text">Manage records that appear on</p>
                                    <p>
                                        <strong>organo.co.in/team</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/3">
                        <a href="/admin/testimonials">
                            <div class="admin-h-card mx-3">
                                <div class="top-div pt-4 mb-2 ">
                                    <div class="icon">
                                        <img src="/static/admin/icons/testimonials_admin.svg" alt="">
                                    </div>
                                </div>
                                <div class="text text-center px-4 py-8">
                                    <div class="title">
                                        <h2>Testimonials</h2>

                                    </div>
                                    <p class="small-text">Manage records that appear on</p>
                                    <p>
                                        <strong>organo.co.in</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                   <div class="w-1/3">
                    <a href="/admin/gallery">
                        <div class="admin-h-card mx-3">
                            <div class="top-div pt-4 mb-2 ">
                                <div class="icon">
                                    <img src="/static/admin/icons/gallery_admin.svg" alt="">
                                </div>
                            </div>
                            <div class="text text-center px-4 py-8">
                                <div class="title">
                                    <h2>Gallery</h2>

                                </div>
                                <p class="small-text">Manage records that appear on</p>
                                <p>
                                    <strong>organo.co.in/gallery</strong>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                    <div class="w-1/3">
                        <a href="/admin/blog">
                            <div class="admin-h-card mx-3">
                                <div class="top-div pt-4 mb-2 ">
                                    <div class="icon">
                                        <img src="/static/admin/icons/blog_admin.svg" alt="">
                                    </div>
                                </div>
                                <div class="text text-center px-4 py-8">
                                    <div class="title">
                                        <h2>Blog</h2>

                                    </div>
                                    <p class="small-text">Manage records that appear on</p>
                                    <p>
                                        <strong>organo.co.in/editorial</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/3">
                        <a href="/admin/press">
                            <div class="admin-h-card mx-3">
                                <div class="top-div pt-4 mb-2 ">
                                    <div class="icon">
                                        <img src="/static/admin/icons/press_admin.svg" alt="">
                                    </div>
                                </div>
                                <div class="text text-center px-4 py-8">
                                    <div class="title">
                                        <h2>Press</h2>

                                    </div>
                                    <p class="small-text">Manage records that appear on</p>
                                    <p>
                                        <strong>organo.co.in/press</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/3">
                        <a href="/admin/videos">
                            <div class="admin-h-card mx-3">
                                <div class="top-div pt-4 mb-2 ">
                                    <div class="icon">
                                        <img src="/static/admin/icons/videos_admin.svg" alt="">
                                    </div>
                                </div>
                                <div class="text text-center px-4 py-8">
                                    <div class="title">
                                        <h2>Videos</h2>

                                    </div>
                                    <p class="small-text">Manage records that appear on</p>
                                    <p>
                                        <strong>organo.co.in/gallery</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
