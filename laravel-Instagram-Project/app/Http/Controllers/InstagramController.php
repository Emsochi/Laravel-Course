<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Intervention\Image\Facades\Image;

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
        

        if(request('image')) {
            $imagePath = (request('image')->store('/instagram','public'));

        $image= Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        }

        
        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/instagram/{$user->id}");
    }
    

}
