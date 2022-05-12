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



                <div class="card">

                    <div class="card-header border-0 pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-story me-2">
                                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
                                </div>
                                <div>
                                    <div class="nav nav-divider">
                                        <h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson </a></h6>
                                        <span class="nav-item small"> 2hr</span>
                                    </div>
                                    <p class="mb-0 small">Web Developer at Webestica</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori
                                            ferguson </a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the
                            president's honor roll.</p>
                        <img class="card-img" src="assets/images/post/3by2/01.jpg" alt="Post">
                    </div>
                </div>


            </div>

            <div class="col-lg-3">
                <div class="card">
                    <!-- Card header START -->
                    <div class="card-header border-0">
                        <h5 class="card-title mb-0">Trending Posts</h5>
                    </div>
                    <!-- Card header END -->
                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- News item -->
                        <div class="mb-3">
                            <h6 class="mb-0"><a href="blog-details.html">Ten questions you should answer truthfully</a></h6>
                            <small>2hr</small>
                        </div>
                        <!-- News item -->
                        <div class="mb-3">
                            <h6 class="mb-0"><a href="blog-details.html">Five unbelievable facts about money</a></h6>
                            <small>3hr</small>
                        </div>
                        <!-- News item -->
                        <div class="mb-3">
                            <h6 class="mb-0"><a href="blog-details.html">Best Pinterest Boards for learning about business</a></h6>
                            <small>4hr</small>
                        </div>
                        <!-- News item -->
                        <div class="mb-3">
                            <h6 class="mb-0"><a href="blog-details.html">Skills that you can learn from business</a></h6>
                            <small>6hr</small>
                        </div>
                        <!-- Load more comments -->
                        <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center"
                           data-bs-toggle="button" aria-pressed="true">
                            <div class="spinner-dots me-2">
                                <span class="spinner-dot"></span>
                                <span class="spinner-dot"></span>
                                <span class="spinner-dot"></span>
                            </div>
                            View all latest news
                        </a>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
        </div>
    </div>

@endsection
