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
                    <form class="px-10" method="POST" action="/admin/press/{{$data->id}}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}
                        <h3 class="">Edit <strong>Press Post</strong></h3>
                        <input type="text" name="active" value="true" hidden class="hidden">

                        <div class="field">
                            <label class="label">Headline</label>
                            <div class="control">
                                <textarea class="textarea" name="headline" id="">{{$data->headline}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">URL</label>
                            <div class="control">
                                <input class="input" name="url" type="text" value="{{$data->url}}">
                            </div>
                        </div>



                        <button type="submit" class="button is-primary">Submit</button>
                        <a  class="button is-danger" href="/admin/press">Cancel</a>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection