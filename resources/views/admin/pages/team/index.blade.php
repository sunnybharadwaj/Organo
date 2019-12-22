@extends ('layouts.admin')

@section('content')
    <div id="admin-team-index" class="admin-wrapper">
        <div class="container">
            <div class="text-center">
                <div class="model-heading">
                    <h2>Team list</h2>
                </div>
                <div class="link-list">
                    <a href="/admin/team/create" class="button">
                        <span class="status icon">
                              <i class="fa fa-plus"></i>
                        </span>
                        <span class="inline-block pl-2">
                        Add new item
                        </span>
                    </a>
                </div>
            </div>


            <div class="admin-v-card max-w-3xl">
                <div class="team-list">
                    @foreach($data as $member)
                        <div class="item-list">
                            <div class="item">
                                <div class="columns is-vcentered">
                                    <div class="column is-11">
                                        <a class="admin-link" href="/admin/team/{{$member->id}}">
                                            <h3>{{$member->name}}</h3></a>
                                    </div>
                                    <div class="column">
                                    <span class="status icon p-4">
                                      <i class="fas fa-circle text-green-500"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>


    </div>
@endsection