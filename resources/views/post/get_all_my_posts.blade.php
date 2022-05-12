@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
            </div>

            <div class="col-md-8 col-lg-6 vstack gap-4">
                @auth
                    <div class="card">
                        <div class="card card-body">
                            <a href="{{ route('app_create_new_post_view') }}" class="btn btn-success">Create New Post</a>

                            @include('shared.flash_messages')
                        </div>
                    </div>
                @endauth


                <h2>My Posts</h2>

                @foreach($posts as $post)
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-story me-2">
                                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
                                </div>
                                <div>
                                    <div class="nav nav-divider">
                                        <h6 class="nav-item card-title mb-0"> <a href=""> Nkululeko Dube</a></h6>
                                        <span class="nav-item small ml-1"> {{ $post->created_at }}</span>
                                    </div>
{{--                                    <p class="mb-0 small">{{ $post->title }}</p>--}}
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                    <li><a class="dropdown-item" href="{{ route('app_view_post', $post->id) }}"> <i class="bi bi-eye fa-fw pe-2"></i>View Post</a></li>
                                    @if($post->user_id === auth()->user()->id)
                                        <li><a class="dropdown-item" href="{{ route('app_edit_post', $post->id) }}"> <i class="bi bi-bookmark fa-fw pe-2"></i>Edit Post</a></li>
                                        <li>
                                            <form id="delete-form" action="{{ route('app_delete_post', $post->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="dropdown-item"> <i class="bi bi-backspace fa-fw pe-2"></i>Delete Post</button>
                                            </form>
                                        </li>

                                    @endif
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item disabled" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post (Coming soon)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{$post->title}}</p>
                    </div>
                </div>
                @endforeach


            </div>

            <div class="col-lg-3">
            </div>
        </div>
    </div>

@endsection
