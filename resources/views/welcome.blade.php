@extends('layouts.app')

@section('content')
    <main>
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
                                             style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                        </div>
                                        <!-- Card body START -->
                                        <div class="card-body pt-0">
                                            <div class="text-center">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-lg mt-n5 mb-3">
                                                    <a href="#!">
                                                        <img class="avatar-img rounded border border-white border-3" src="assets/images/avatar/07.jpg" alt="">
                                                    </a>
                                                </div>
                                                <!-- Info -->
                                                <h5 class="mb-0"> <a href="#!">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a> </h5>
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
                                            <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
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
                    <div class="card card-body">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2">
                                <a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                                <textarea class="form-control pe-4 border-0" rows="2" data-autoresize=""
                                          placeholder="Share your thoughts..."></textarea>
                            </form>
                        </div>
                        <!-- Share feed toolbar START -->
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal"
                                   data-bs-target="#modalCreateFeed"> <i class="bi bi-emoji-smile-fill text-warning pe-2"></i>Feeling
                                    /Activity</a>
                            </li>
                            <li class="nav-item dropdown ms-lg-auto">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#" id="feedActionShare" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Create a poll</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question
                                        </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Share feed toolbar END -->
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
    </main>
@endsection


<div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="modalLabelCreateFeed" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelCreateFeed">Create Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add Feed -->
                <div class="d-flex mb-3">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs me-2">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
                    </div>
                    <!-- Feed box  -->
                    <form class="w-100">
                        <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="4"
                                  placeholder="Share your thoughts..." autofocus=""></textarea>
                    </form>
                </div>
            </div>
            <!-- Modal feed body END -->

            <!-- Modal feed footer -->
            <div class="modal-footer row justify-content-between">
                <!-- Select -->
                <div class="col-lg-3">
                    <select class="form-select">
                        <option selected value="1">Publish</option>
                        <option selected value="2">Draft</option>
                    </select>
                </div>
                <div class="col-lg-8 text-sm-end">
                    <button type="button" class="btn btn-success-soft">Post</button>
                </div>
            </div>
            <!-- Modal feed footer -->

        </div>
    </div>
</div>
