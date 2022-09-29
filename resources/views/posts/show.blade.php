@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class=" rounded w-100" style="max-width: 40px">
                    </div>
                    <div>
                        <div style="font-weight: bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none pe-1">
                                <span class="text-dark">{{ $post->user->username}}</span>
                            </a>
                            <a href="#" class=" text-decoration-none ps-1">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

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
</div>
@endsection
