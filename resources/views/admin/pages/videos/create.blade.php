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
                    <form class="px-10" method="POST" action="/admin/videos" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-center form-title">Create a new <strong>Video</strong></h2>
                        <input type="text" name="active" value="true" hidden class="hidden">

                        <div class="field">
                            <label class="label">Title</label>
                            <div class="control">
                                <textarea class="textarea" name="title" id="">{{old('title')}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Youtube URL</label>
                            <div class="control">
                                <input class="input" name="url" type="text" value="{{old('url')}}">
                            </div>
                        </div>



                        <button type="submit" class="button is-primary">Submit</button>
                        <a  class="button is-danger" href="/admin/testimonials">Cancel</a>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection