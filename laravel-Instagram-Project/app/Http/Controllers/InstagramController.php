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

    public function show(\App\Models\User $user)
    {
        return view('dashboard', compact('user'));
    }

    public function edit(\App\Models\User $user) 
    {
        $this->authorize('update', $user->profile);
        return view('instagramProfile.editProfile', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'',
            'image'=>'',
        ]);
        
        auth()->user()->profile->update($data);

        return redirect("/instagram/{$user->id}");
    }
    

}
