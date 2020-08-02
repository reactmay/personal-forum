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