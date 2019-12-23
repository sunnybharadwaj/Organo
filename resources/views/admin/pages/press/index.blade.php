@extends ('layouts.admin')

@section('content')
    <div id="admin-team-index" class="admin-wrapper">
        <div class="container">
            <div class="text-center">
                <div class="model-heading py-6">
                    <h2>Press</h2>
                </div>
                <div class="link-list">
                    <a href="/admin" class="button">
                        <span class="status icon">
                              <i class="fa fa-arrow-left"></i>
                        </span>
                        <span class="inline-block pl-2">
                        Back to Dashboard
                        </span>
                    </a>

                    <a href="/press" target="_blank" class="button">
                        <span class="status icon">
                              <i class="fa fa-external-link-alt"></i>
                        </span>
                        <span class="inline-block pl-2">
                        View on <strong>/press</strong>
                        </span>
                    </a>

                    <a href="/admin/press/create" class="button">
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
                    <div class="item-list">
                        @foreach($data as $post)

                            <a class="admin-link" href="/admin/press/{{$post->id}}">
                                <div class="item">
                                    <div class="columns is-vcentered">
                                        <div class="column is-11">

                                            <p class="font-bold">{{ Str::limit($post->headline, $limit = 80, $end = '...') }}</p>
                                        </div>
                                        <div class="column">
                                    <span class="status icon p-4">
                                      <i class="fas fa-circle text-green-500"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection