@props(['question'])
<div class="flex flex-col gap-6">
    <div class="flex flex-col gap-6">
        <div class="flex gap-4">
            <img src="https://placehold.jp/50x50.png" alt="{{$question->user->fullname}}"
                 class="rounded-full h-12">
            <div>
                <p class="text-lg font-medium"><a href="/{{app()->getLocale()}}/users/{{$question->user->slug}}"
                                                  class="hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">{{$question->user->fullname}}</a>
                </p>
                <p class="text-sm">{{trans_choice('roles.' . $question->user->role, $question->user->genre)}}</p>
            </div>
        </div>
        <div>
            {!! $question->body !!}
        </div>
        <div class="flex flex-col gap-6 justify-between md:flex-row md:items-center">
            <div class="flex flex-col gap-2 sm:flex-row sm:gap-4 font-light">
                {!! __('forum.single.infos', ['datetime' => $question->published_at->format('d-m-Y'), 'date' => $question->published_at->format('d/m/Y'), 'datetimeHours' => $question->published_at->format('H:i'), 'time' => $question->published_at->format('H:i')]) !!}
                <div class="bg-blue/50 h-max-content w-px"></div>
                <div class="flex gap-4">
                    <p>{{$question->category->translations->where('locale', app()->getLocale())->first()->name}}</p>
                    @if($question->is_solved)
                        <div class="bg-blue/50 h-max-content w-px"></div>
                        <p class="flex gap-2 text-green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                                 class="fill-green h-full">
                                <path
                                    d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                            </svg>
                            {{__('forum.single.resolved')}}
                        </p>
                    @endif
                </div>
            </div>
            @auth()
                <a href="#reply"
                   class="flex items-center gap-4 uppercase text-orange hover:text-orange-dark transitionable">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                         class="fill-orange h-full">
                        <path
                            d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/>
                    </svg>
                    <span>{{__('forum.single.answer_button')}}</span>
                </a>
            @endauth
        </div>
    </div>
    <div class="bg-blue/50 h-px w-full"></div>
    <div class="flex flex-col gap-6">
        @guest()
            {!! __('forum.single.guest_link') !!}
        @endguest
        @auth()
            <form action="/forum/slug/reply" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="reply" class="text-lg">{{__('forms.labels.answer')}}</label>
                    <textarea name="reply" id="reply" cols="30" rows="10"
                              class="pl-3 py-2 border border-orange-light rounded-lg focus:outline focus:outline-1 focus:outline-orange placeholder:font-light transition ease-in-out duration-200"></textarea>
                </div>
                <div class="flex gap-8 items-center justify-end">
                    <a href="#" class="uppercase text-orange">{{__('forms.links.cancel')}}</a>
                    <button type="submit"
                            class="flex gap-4 uppercase font-light bg-orange text-white py-2 pl-5 pr-7 rounded-lg hover:bg-orange-dark transitionable">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width=24
                             class="fill-white h-full">
                            <path
                                d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/>
                        </svg>
                        <span>{{__('forms.buttons.post_reply')}}</span>
                    </button>
                </div>
            </form>
        @endauth
        <div class="bg-blue/50 h-px w-full"></div>
    </div>
</div>
