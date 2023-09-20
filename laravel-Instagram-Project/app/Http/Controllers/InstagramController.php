<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class InstagramController extends Controller
{
    public function index(Request $request): View
    {
        return view('dashboard', [
            'user' => Auth::user(),

        ]);
    }
}
