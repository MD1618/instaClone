@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)

    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>

        </div>
    </div>
    <div class="row pt-2 pb-5">
        <div class="col-6 offset-3">
            <div>
                <div class="d-flex align-items-center">

                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">
                                {{ $post->user->username }} |
                            </span>
                        </a>
                        
                    </div>
                    <div class="pl-4">{{ $post->caption }}</div>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

</div>
@endsection