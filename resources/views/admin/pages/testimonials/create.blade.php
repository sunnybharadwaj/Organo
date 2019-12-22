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
                <form method="POST" action="/admin/team" enctype="multipart/form-data">
                    @csrf
                    <h3 class="h3">Create a new Team Member</h3>

                    <div class="field">
                        <label class="label">Full Name</label>
                        <div class="control">
                            <input class="input" name="name" type="text" placeholder="First Name, Last Name" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Role</label>
                        <div class="control">
                            <input class="input" name="role" type="text" placeholder="Role" value="{{old('role')}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">LinkedIn</label>
                        <div class="control">
                            <input class="input" name="linkedin" type="text" placeholder="LinkedIn link" value="{{old('linkedin')}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" type="text">{{old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Upload Profile Photo</label>

                        <div class="control">
                            <div class="file is-boxed">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="imagepath" value="{{old('imagepath')}}">
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