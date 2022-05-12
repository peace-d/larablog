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
{{--                            <a href="{{ route('app_get_all_my_posts') }}" class="btn btn-success">Create New Post</a>--}}
                        </div>
                    </div>
                @endauth


                <div class="card">

                    <div class="card-header border-0 pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="nav nav-divider">
                                        <h6 class="nav-item card-title mb-0">New Blog Post</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('shared.flash_messages')
                        <form class="row g-3" method="POST" action="{{ route('app_update_post', ['post_id' => $post->id]) }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="" value="{{ @old('title', $post->title) }}" name="title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <textarea class="ckeditor form-control @error('content') is-invalid @enderror" name="content">{{ @old('content', $post->content) }}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select type="text" class="form-control @error('status_id') is-invalid @enderror" name="status_id" id="status_id">
                                        <option>-- Select a status --</option>
                                        @foreach($statuses as $status)
                                            <option value="{{ $status->id }}" @if($status->id == @old('status_id', $post->status_id)) selected @endif >{{$status->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                        <option>-- Select a category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id === @old('category_id', $post->category_id)) selected @endif >{{$category->name}}</option>
                                        @endforeach
                                        <option value="new_category_action">-- Create a new category --</option>
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3" id="new_category_input_block" style="display: none">
                                    <label class="form-label">New category</label>
                                    <input type="text" class="form-control @error('new_category') is-invalid @enderror" name="new_category" id="new_category">
                                    @error('new_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-sm btn-primary mb-0">Update Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

            <div class="col-lg-3">
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const categorySelect = document.querySelector('#category_id');
        const newCategoryInputBlock = document.querySelector('#new_category_input_block');
        categorySelect.addEventListener('change', (e) => {
            if (categorySelect.value === 'new_category_action') {
                newCategoryInputBlock.style.display = 'block';
            } else {
                newCategoryInputBlock.style.display = 'none';
            }
        });
    </script>

@endsection

