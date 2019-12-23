@extends ('layouts.admin')

@section('content')
    <div id="">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
            @endforeach
        @endif

        <div class="admin-wrapper py-2">
            <div class="admin-v-card max-w-3xl my-4">
                <div class="px-4 py-8">
                    <form class="px-10" method="POST" action="/admin/team/{{$currentMember->id}}"
                          enctype="multipart/form-data">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="text-center">
                            <h3 class="h3">Edit Team Member</h3>
                            <div class="max-w-sm mx-auto p-6">
                                <img src="/storage/{{$currentMember->imagepath}}" alt="">
                            </div>
                        </div>
                        <div class="mb-4"></div>

                        <input type="text" name="active" value="true" hidden class="hidden">

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
                                <input class="input" name="role" type="text" placeholder="Role"
                                       value="{{$currentMember->role}}">
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
                                <textarea class="textarea" name="description"
                                          type="text">{{$currentMember->description}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Upload New Photo</label>

                            <div class="control">
                                <div class="file is-boxed">
                                    <label class="file-label">
                                        <input class="file-input" type="file" name="imagepath"
                                               value="{{$currentMember->imagepath}}">
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
                        <a class="button is-danger" href="/admin/team">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection