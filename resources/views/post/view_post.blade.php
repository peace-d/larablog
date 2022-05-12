@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg mx-0">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body d-block px-2 px-lg-0">
                            @auth
                                <div class="card overflow-hidden">
                                    <!-- Cover image -->
                                    <div class="h-50px"
                                         style="background-image:url({{ asset('images/lines-gb6bd8abdf_1920.jpg') }});
                                             background-position: center;
                                             background-size: cover;
                                             background-repeat: no-repeat;">
                                    </div>
                                    <!-- Card body START -->
                                    <div class="card-body pt-0">
                                        <div class="text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-lg mt-n5 mb-3">
                                                <a href="{{ route('app_edit_user') }}">
                                                    <img class="avatar-img rounded border border-white border-3 img-fluid" src="{{ asset('images/no_image_available.png') }}" alt="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} profile pic">
                                                </a>
                                            </div>
                                            <!-- Info -->
                                            <h5 class="mb-0"> <a href="{{ route('app_edit_user') }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a> </h5>
                                            <small>{{ Auth::user()->occupation }}</small>
                                            <p class="mt-3">{{ Auth::user()->bio }}</p>

                                            <!-- User stat START -->
                                            <div class="hstack gap-2 gap-xl-3 justify-content-center">
                                                <div>
                                                    <h6 class="mb-0">256</h6>
                                                    <small>Post</small>
                                                </div>
                                                <div class="vr"></div>
                                                <div>
                                                    <h6 class="mb-0">2.5K</h6>
                                                    <small>Followers</small>
                                                </div>
                                                <div class="vr"></div>
                                                <div>
                                                    <h6 class="mb-0">365</h6>
                                                    <small>Following</small>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Side Nav START -->
                                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile.html"> <img class="me-2 h-20px fa-fw"
                                                                                                 src="assets/images/icon/home-outline-filled.svg" alt=""><span>Feed </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="my-profile-connections.html"> <img class="me-2 h-20px fa-fw"
                                                                                                             src="assets/images/icon/person-outline-filled.svg" alt=""><span>Connections
                                                        </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html"> <img class="me-2 h-20px fa-fw"
                                                                                           src="assets/images/icon/earth-outline-filled.svg" alt=""><span>Latest News
                                                        </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="events.html"> <img class="me-2 h-20px fa-fw"
                                                                                             src="assets/images/icon/calendar-outline-filled.svg" alt=""><span>Events </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="groups.html"> <img class="me-2 h-20px fa-fw"
                                                                                             src="assets/images/icon/chat-outline-filled.svg" alt=""><span>Groups </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="notifications.html"> <img class="me-2 h-20px fa-fw"
                                                                                                    src="assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications
                                                        </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="settings.html"> <img class="me-2 h-20px fa-fw"
                                                                                               src="assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings </span></a>
                                            </li>
                                        </ul>
                                        <!-- Side Nav END -->
                                    </div>
                                    <!-- Card body END -->
                                    <!-- Card footer -->
                                    <div class="card-footer text-center py-2">
                                        <a class="btn btn-link btn-sm" href="{{ route('app_edit_user') }}">View Profile </a>
                                    </div>
                                </div>
                        @endauth

                        <!-- Helper link START -->
                            <ul class="nav small mt-4 justify-content-center lh-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="my-profile-about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="settings.html">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="#">Support </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#l">Help</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy &amp; terms</a>
                                </li>
                            </ul>
                            <!-- Helper link END -->
                            <!-- Copyright -->
                            <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank"
                                                                       href="https://www.webestica.com/"> LaraBlog </a></p>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-8 col-lg-6 vstack gap-4">
                @auth
                    <div class="card">
                        <div class="card card-body">
                            <a href="{{ route('app_get_all_my_posts') }}" class="btn btn-primary">My Posts</a>
                        </div>
                        @include('shared.flash_messages')
                    </div>
                @endauth
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-story me-2">
                                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
                                </div>
                                <div>
                                    <div class="nav nav-divider">
                                        <h6 class="nav-item card-title mb-0"> <small>{{ $post->category->name }} &nbsp; &nbsp; </small></h6>
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
{{--                                    <li><a class="dropdown-item" href="{{ route('app_view_post', $post->id) }}"> <i class="bi bi-eye fa-fw pe-2"></i>View Post</a></li>--}}
                                    @auth
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
                                    @endauth
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item disabled" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post (Coming soon)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1>{{$post->title}}</h1>

                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
