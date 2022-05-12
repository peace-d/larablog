<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function dashboard()
    {
        $loggedUser = [];
        if (auth()->user()) {
            $loggedUser = User::findOrFail(auth()->user()->id);
        }

        return view('welcome', [
            'posts' => Post::where( ['status_id' => Status::STATUS_ACTIVE_ID] )->get(),
            'categories' => Category::all(),
            'loggedUser' => $loggedUser
        ]);
    }
}
