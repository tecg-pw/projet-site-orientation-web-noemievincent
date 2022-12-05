@props(['documentation', 'languages'])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex flex-col gap-3">
        <div>
            <h3 class="mb-2 text-xl font-semibold inline hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                <a href="{{$documentation->link}}">
                    {{$documentation->title}}
                </a>
            </h3>
            <p class="text-sm">{{$documentation->description}}
            </p>
        </div>
        <ul class="flex gap-2">
            @foreach($languages as $language)
                <x-resources.languages :language="$language"/>
            @endforeach
        </ul>
    </div>
</div>
