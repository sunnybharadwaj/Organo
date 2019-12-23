@extends ('layouts.admin')

@section('content')
    <div class="admin-wrapper pt-1">


        <div class="admin-v-card max-w-4xl pt-1">
            <div class="px-16 py-8 ">
                <p style="white-space: pre-line">{{$data->headline}}</p>
                <a class="button" href="{{$data->url}}">Visit Site</a>
                <h3>{{$data->name}}</h3>
                <h4 class="font-bold">{{$data->cred}}</h4>
            </div>

        </div>
        <div class="text-center">
            <div class="model-heading">

            </div>
            <div class="link-list">
                <a href="/admin/press/{{$data->id}}/edit" class="button">
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
                        <form method="POST" action="/admin/press/{{$data->id}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="">Delete</button>
                        </form>
                    </span>
                </a>


                <a href="/admin/press" class="button">
                        <span class="status icon">
                              <i class="fa fa-arrow-left"></i>
                        </span>
                    <span class="inline-block pl-2">
                        Back to Testimonials
                        </span>
                </a>
            </div>
        </div>
    </div>


@endsection