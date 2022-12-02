@props(['question'])
<article aria-labelledby="{{$question->slug}}"
         class="relative bg-white rounded-2xl border border-blue/20 p-4 hover:bg-blue-card transition ease-in-out duration-200">
    <a href="/{{app()->getLocale()}}/forum/{{$question->slug}}" class="full-link">{{$question->title}}</a>
    <div class="flex flex-col gap-4">
        <div class="flex justify-between">
            <div class="flex items-center gap-2">
                @if($question->is_solved)
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                         class="fill-green bg-green-light rounded-full p-1">
                        <path
                            d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                @endif
                <h3 id="{{$question->slug}}" class="text-xl">{{$question->title}}</h3>
            </div>
            <a href="#" class="text-sm">{{$question->category->name}}</a>
        </div>
        <p class="font-light cut-text text-sm">
            {{$question->body}}
        </p>
        <div class="flex justify-between">
            <div class="flex gap-6 items-center text-sm font-light">
                <a href="/{{app()->getLocale()}}/users/{{$question->user->slug}}" class="flex items-center gap-3">
                    <img src="https://placehold.jp/25x25.png" alt="{{$question->user->fullname}}"
                         class="rounded-full">
                    <span>{{$question->user->fullname}}</span>
                </a>
                |
                <p>{{$question->replies_count}} {{__('forum.reply.count')}}</p>
                |
                <time
                    datetime="{{$question->published_at->format('d-m-Y')}}">{{$question->published_at->format('d/m/Y')}}</time>
            </div>
        </div>
    </div>
</article>
