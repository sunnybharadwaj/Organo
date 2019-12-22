@extends ('layouts.admin')

@section('content')
    <div>
        <div class="container">
            <div class="flex">
                <div class="w-1/2">
                    <a href="/admin/team" class="button is-primary">Back to Team</a>
                    <a href="/admin/team/{{$currentMember->id}}/edit" class="button is-warning">Edit</a>
                    <form method="POST" action="/admin/team/{{$currentMember->id}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="button is-danger">Delete</button>
                    </form>
                    <h2>
                        {{$currentMember->name}}
                    </h2>
                    <h3>{{$currentMember->role}}</h3>
                    <p>{{$currentMember->description}}</p>
                    <h3><a target="_blank" href="{{$currentMember->linkedin}}">LinkedIn</a></h3>

                </div>
                <div class="w-1/2">
                    <img src="/storage/{{$currentMember->imagepath}}" alt="">
                </div>
            </div>


        </div>


    </div>


@endsection