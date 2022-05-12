<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function createNewPostView(Request $request)
    {
        return view('post.create_new_post', [
            'statuses' => Status::all(),
            'categories' => Category::all()
        ]);
    }

    public function createNewPost(Request $request)
    {
        if (isset($request->category_id) && $request->category_id === 'new_category_action') {
            $request->validate(['new_category' => 'required']);

            $newCategory = new Category();

            $newCategory->name = $request->new_category;

            $newCategory->save();

            $request->merge(['category_id' => $newCategory->id]);
        }
        $validated = $request->validate([
            'title' => 'required',
            'user_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'content' => 'required',
            'category_id' => 'required|numeric'
        ]);

        Post::create($validated);

        return redirect()->route('app_get_all_my_posts')->with('success', 'New post has been created');
    }


    public function getAllMyPosts(Request $request)
    {
        return view('post.get_all_my_posts', [
            'posts' => Post::where(['user_id' => auth()->user()->id, 'status_id' => Status::STATUS_ACTIVE_ID])->get(),
            'title' => 'My Posts'
        ]);
    }
}
