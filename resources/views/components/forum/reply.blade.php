@props(['reply'])
<div class="flex flex-col gap-4">
    <div class="flex gap-4">
        <img src="https://placehold.jp/50x50.png" alt="{{$reply->user->fullname}}"
             class="rounded-full">
        <div>
            <p class="text-lg font-medium"><a href="/{{$reply->user->slug}}"
                                              class="hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$reply->user->fullname}}</a>
            </p>
            <p class="text-sm">{{__('roles.' . $reply->user->role)}}</p>
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <p>
            {{$reply->body}}
        </p>
        <div class="flex gap-4 font-light">
            {!! __('forum.reply.infos', ['datetime' => $reply->published_at->format('d-m-Y'), 'date' => $reply->published_at->format('d/m/Y'), 'datetimeHours' => $reply->published_at->format('H:i'), 'time' => $reply->published_at->format('H:i')]) !!}
            @if(Request::path() != 'forum/' . $reply->question->slug)
                <div class="bg-blue/50 h-max-content w-px"></div>
                {!! __('forum.reply.question', ['question' => $reply->question->title, 'slug' => $reply->question->slug]) !!}
            @endif
        </div>
    </div>
</div>
