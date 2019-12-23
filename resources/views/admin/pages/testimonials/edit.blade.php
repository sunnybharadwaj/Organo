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
                    <form class="px-10" method="POST" action="/admin/testimonials/{{$currentTestimonial->id}}"
                          enctype="multipart/form-data">
                        {{method_field('PATCH')}}
                        @csrf
                        <input type="text" name="active" value="true" hidden class="hidden">
                        <h3 class="h3">Edit Testimonial</h3>
                        <div class="field">
                            <label class="label">Quote</label>
                            <div class="control">
                                <textarea class="textarea" name="quote" id="">{{$currentTestimonial->quote}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Name of the speaker/author</label>
                            <div class="control">
                                <input class="input" name="name" type="text" value="{{$currentTestimonial->name}}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Speaker Description</label>
                            <div class="control">
                                <input class="input" name="cred" type="text"  value="{{$currentTestimonial->cred}}">
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