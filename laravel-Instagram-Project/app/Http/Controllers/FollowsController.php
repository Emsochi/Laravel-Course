<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;


use Auth;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request, \App\Models\User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
