<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->usertype == 'user') {
                return Inertia::render('User/Home');
            } else {
                return redirect()->route('admin.app');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
