@props(['reply'])
<div class="flex flex-col gap-4" id="reply-{{$reply->id}}">
    <div class="flex gap-4">
        <img src="https://placehold.jp/50x50.png" alt="{{$reply->user->fullname}}"
             class="rounded-full">
        <div>
            <p class="text-lg font-medium"><a href="/{{app()->getLocale()}}/users/{{$reply->user->slug}}"
                                              class="hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$reply->user->fullname}}</a>
            </p>
            <p class="text-sm">{{trans_choice('roles.' . $reply->user->role, $reply->user->genre)}}</p>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        {!! $reply->body !!}
        <div class="font-light flex flex-col gap-1 sm:flex-row sm:gap-4">
            {!! __('forum.reply.infos', ['datetime' => $reply->published_at->format('d-m-Y'), 'date' => $reply->published_at->format('d/m/Y'), 'datetimeHours' => $reply->published_at->format('H:i'), 'time' => $reply->published_at->format('H:i')]) !!}
            @if(Request::path() != app()->getLocale() . '/forum/questions/' . $reply->question->slug)
                <div class="bg-blue/50 h-max-content w-px"></div>
                {!! __('forum.reply.question', ['question' => $reply->question->title, 'slug' => $reply->question->slug]) !!}
            @endif
        </div>
    </div>
</div>
