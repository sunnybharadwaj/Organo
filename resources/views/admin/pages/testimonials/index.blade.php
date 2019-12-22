@extends ('layouts.admin')

@section('content')
    <div id="admin-team-index">
        <div class="container">
            <h3>Testimonial list</h3> <a href="/admin/team/create">Add a new testimonial</a>

            <div class="max-w-4xl">
                <div class="container">

                </div>
                @foreach($data as $item)
                <div class="flex">
                    <div class="w-6/12">
                        <a class="admin-link" href="/admin/team/{{$item->id}}">{{$item->name}}</a>
                    </div>
                    <div class="w-2/12">
                        <a class="admin-link" href="/admin/team/{{$member->id}}">
                                            <span class="icon is-small">
                                              <i class="fas fa-eye"></i>
                                            </span>
                                    <span>View</span>
                                </a>
                    </div>
                    <div class="w-2/12">
                        <a class="admin-link" href="/admin/team/{{$member->id}}/edit">
                                             <span class="icon is-small">
                                               <i class="fas fa-edit"></i>
                                             </span>
                                    <span>Edit</span>
                                </a>
                    </div>
                    <div class="w-2/12">
                        <span class="icon is-small">
                                   <i class="fas fa-minus-circle"></i>
                                 </span>
                        <span>Delete</span>
                    </div>
                </div>
                @endforeach
            </div>

        </div>







    </div>
@endsection