@props([
    'showJob', 'name', 'definition'
])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex justify-between mb-2">
        <h3 class="text-xl font-semibold">{{ucfirst(__($name))}}</h3>
        @if($showJob)
            <a href="/jobs/partners/slug" class="flex items-center gap-3 group">
                <span
                    class="text-sm underline group-hover:underline group-hover:underline-offset-2 group-hover:text-orange transition ease-in-out duration-200">Léonard Web Solutions</span>
                <img src="https://placehold.jp/30x30.png" alt="Léonard Web Solutions"
                     height="30" width="30" class="rounded-full">
            </a>
        @endif
    </div>
    <p class="text-sm">{{__($definition)}}
    </p>
</div>
