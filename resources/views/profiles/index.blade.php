@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5 pl-5 pb-3">
            <div>
            <img src="/storage/{{ $user->profile->profileImage() }}" class="w-100">
            </div>
        </div>
        <div class="col-9 p-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                    @endcan
                </div>

                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan

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