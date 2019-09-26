<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //

    public function __construct()
    {
        //makes sure the authentication is applied to the methods below
        $this->middleware('auth');
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);
        
        // get image for request array, store it in uploads folder(created if doesnt exist) 
        // in the public folder of the storage folder and return the file path to a variable
        // run php artisan storage:link to link this to the public folder
        $imagePath = request('image')->store('uploads','public');

        // using the intervention/image library ( composer require intervention/image )
        // this code will convert the image before storing it
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        //get authenticated user
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        
       return redirect('/profile/' .auth()->user()->id);
    }
}
