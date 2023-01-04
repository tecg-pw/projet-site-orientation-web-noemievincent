@props(['question', 'category'])
<article aria-labelledby="{{$question->slug}}"
         class="relative bg-white rounded-2xl border border-blue/20 p-4 hover:bg-blue-card transitionable">
    <a href="/{{app()->getLocale()}}/forum/questions/{{$question->slug}}" class="full-link">{{$question->title}}</a>
    <div class="flex flex-col gap-3">
        <div class="flex gap-2.5 flex-col lg:flex-row lg:justify-between">
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
            <p>{{$question->user->fullname}}</p>
        </div>
        <div class="font-light cut-text text-sm">
            {!! $question->body !!}
        </div>
        <div class="font-light text-sm flex justify-between sm:justify-start sm:gap-10">
            <a href="#">{{$category->name}}</a>
            <p>{{$question->replies_count}} {{trans_choice('forum.reply.count', $question->replies_count)}}</p>
            <time
                datetime="{{$question->published_at->translatedFormat('d-m-Y')}}">{{$question->published_at->translatedFormat('d/m/Y')}}</time>
        </div>
    </div>
</article>
