@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5 pl-5">
            <div>
                <img src="/svg/MDWDLogo2.3.svg" style="height:100px;">
            </div>
        </div>
        <div class="col-9 p-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                    <div class="pr-5"><strong>1.8M</strong> followers</div>
                    <div class="pr-5"><strong>187</strong> Following</div>
                </div>

                <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
                <div>{{ $user->profile->description}}</div>
                <div>
                    <a href="http://{{ $user->profile->url}}">{{ $user->profile->url?? 'N/A'}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        @foreach ($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>

        @endforeach

    </div>



</div>
@endsection