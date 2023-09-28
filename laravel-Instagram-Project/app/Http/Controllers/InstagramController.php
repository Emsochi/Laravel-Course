<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Auth;

class InstagramController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'user' => Auth::user()
        ]);
    }

    public function show($user)
    {
        $user = User::findOrFail($user);
        return view('dashboard', [
            'user' => $user
        ]);
    }

}
