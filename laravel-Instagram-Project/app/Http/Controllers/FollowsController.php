<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function follow(Request $request, $user)
    {
        return response()->json(['success' => true]);
    }
}
