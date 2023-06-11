@props(['comment'])

<article class="flex bg-gray-100 p-6 border border-gray-200 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{$comment->user_id}}" alt="avatar" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold mb-1">{{$comment->author->name}}</h3>
            <p class="text-xs mb-2">Posted
                <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>