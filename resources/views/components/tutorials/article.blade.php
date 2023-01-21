@props(['tutorial', 'languages', 'is_favorite'])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex flex-col gap-3">
        <div>
            <div class="flex justify-between mb-2">
                <h3 class="text-xl font-semibold hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                    <a href="{{$tutorial->link}}">
                        {{$tutorial->title}}
                    </a>
                </h3>
                @auth()
                    <x-save_form :tutorial="$tutorial" :is_favorite="$is_favorite"/>
                @endauth
            </div>
            <div class="text-sm">{!! $tutorial->description !!}
            </div>
        </div>
        <ul class="flex gap-2">
            @foreach($languages as $language)
                <x-resources.languages :language="$language"/>
            @endforeach
        </ul>
    </div>
</div>
