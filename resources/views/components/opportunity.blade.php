@props([
    'showJob', 'name', 'definition'
])
<div
    class="rounded-2xl border border-blue/20 p-5">
    <div class="flex justify-between items-center mb-2">
        <h3 class="text-xl font-semibold">{{ucfirst(__($name))}}</h3>
        @if($showJob)
            <a href="/jobs/partners/slug" class="flex items-center gap-3">
                                            <span
                                                class="text-sm underline hover:underline hover:underline-offset-2 hover:text-orange transition ease-in-out duration-200">Léonard Web Solutions</span>
                <img src="https://placehold.jp/36x36.png" alt="Léonard Web Solutions"
                     height="36" width="36" class="rounded-full">
            </a>
        @endif
    </div>
    <p class="text-sm">{{__($definition)}}
    </p>
</div>
