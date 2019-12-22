@extends ('layouts.admin')

@section('content')
    <div id="layout-index">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
            @endforeach
        @endif

        <div class="container">
            <div class="max-w-xl">
                <form method="POST" action="/admin/team/{{$currentMember->id}}" enctype="multipart/form-data">
                    {{method_field('PATCH')}}
                    @csrf
                    <h3 class="h3">Edit Team Member: <br/> <strong>{{$currentMember->name}}</strong></h3>

                    <div class="field">
                        <label class="label">Full Name</label>
                        <div class="control">
                            <input class="input" name="name" type="text" placeholder="First Name, Last Name"
                                   value="{{$currentMember->name}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Role</label>
                        <div class="control">
                            <input class="input" name="role" type="text" placeholder="Role" value="{{$currentMember->role}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">LinkedIn</label>
                        <div class="control">
                            <input class="input" name="linkedin" type="text" placeholder="LinkedIn link"
                                   value="{{$currentMember->linkedin}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" type="text">{{$currentMember->description}}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <img src="/storage/{{$currentMember->imagepath}}" alt="">
                        <label class="label">Upload New Photo</label>

                        <div class="control">
                            <div class="file is-boxed">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="imagepath" value="{{$currentMember->imagepath}}">
                                    <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                            </span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="button is-primary">Submit</button>


                </form>
            </div>

        </div>


    </div>
@endsection