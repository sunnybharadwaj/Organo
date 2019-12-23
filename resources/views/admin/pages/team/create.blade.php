@extends ('layouts.admin')

@section('content')
    <div id="create">
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
                    <form class="px-10" method="POST" action="/admin/team" enctype="multipart/form-data">
                        @csrf
                        <h2 class="">Create a new <strong>Team Member</strong></h2>

                        <input type="text" name="active" value="true" hidden class="hidden">


                        <div class="field">
                            <label class="label ">Upload Profile Photo</label>

                            <div class="control my-2">
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
                        <a  class="button is-danger" href="/admin/team">Cancel</a>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection