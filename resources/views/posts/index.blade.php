@extends('layouts.app')

@section('content')
<div class="container">
    @if($posts->isEmpty())
        <div>Test</div>
    @else
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                        <span style="font-weight: bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none" >
                                <span class="text-dark">{{ $post->user->username}}</span>
                            </a>
                        </span> 
                        <span class="ps-1">{{ $post->caption }}</span>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    @endif

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
