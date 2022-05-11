<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function editProfile()
    {
        $user = $this->userRepository->getUserById(auth()->user()->id);

        if (!$user instanceof User) {
            throw new \Exception('Could not find user');
        }
        return view('user.edit_user_profile', [
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = $this->userRepository->getUserById($request->id);

        if (!$user instanceof \App\Models\User) {
            throw new \Exception('Could not find user');
        }

        if ($user->id !== auth()->user()->id) {
            throw new \Exception('You have no permission to update this profile');
        }

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'display_name' => 'required|unique:users,display_name,'.$user->id.'|max:20',
            'email' => 'required|unique:users,email,'.$user->id.'|max:20',
        ]);

        $user->update($request->all());

        Log::info($request->all());
        Log::info('logged');

        return redirect()->route('app_edit_user')->with('success', ' profile has been updated.');
    }
}
