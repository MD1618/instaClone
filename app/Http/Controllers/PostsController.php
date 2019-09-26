<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        //dd(request()->all());

        //get authenticated user

        auth()->user()->posts()->create($data);

        
       
    }
}