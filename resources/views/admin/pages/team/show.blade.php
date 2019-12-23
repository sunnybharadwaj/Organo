@extends ('layouts.admin')

@section('content')
    <div class="admin-wrapper pt-1">


        <div class="admin-v-card max-w-4xl pt-1">
            <div class="px-16 py-8 ">
                <div class="flex">
                    <div class="w-1/2">
                        <h2>
                            {{$currentMember->name}}
                        </h2>
                        <h3>{{$currentMember->role}}</h3>
                        <p>{{$currentMember->description}}</p>
                        <h3><a class="button my-4" target="_blank" href="{{$currentMember->linkedin}}">LinkedIn</a></h3>

                    </div>
                    <div class="w-1/2">
                        <div class="max-w-sm">
                            <img src="/storage/{{$currentMember->imagepath}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center">
            <div class="model-heading">

            </div>
            <div class="link-list">
                <a href="/admin/team/{{$currentMember->id}}/edit" class="button">
                        <span class="status icon">
                              <i class="fa fa-edit"></i>
                        </span>
                    <span class="inline-block pl-2">
                        Edit
                        </span>
                </a>
                <a class="button is-danger">
                    <span class="status icon">
                              <i class="fa fa-edit"></i>
                        </span>
                    <span class="inline-block pl-2">
                        <form method="POST" action="/admin/team/{{$currentMember->id}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="">Delete</button>
                        </form>
                    </span>
                </a>


                <a href="/admin/team" class="button">
                        <span class="status icon">
                              <i class="fa fa-arrow-left"></i>
                        </span>
                    <span class="inline-block pl-2">
                        Back to Team
                        </span>
                </a>
            </div>
        </div>
    </div>


@endsection