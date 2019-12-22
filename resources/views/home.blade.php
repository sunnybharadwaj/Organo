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
            </ul>
        </div>
    </div>
@endsection
