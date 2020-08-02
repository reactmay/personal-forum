@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $thread->title }}</div>

                <div class="card-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            @foreach($thread->replies as $reply)
                <div class="card mt-1">
                    <div class="card-header">
                        <a href="#">
                            {{ $reply->owner->name }}
                        </a> said {{ $reply->created_at->diffForHumans() }}...
                    </div>
                    <div class="card-body rounded">
                        {{ $reply->body }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
