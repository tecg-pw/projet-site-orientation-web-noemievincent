@props([
    'company', 'opportunity'
])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex justify-between mb-2">
        <h3 class="text-xl font-semibold">{{ucfirst($opportunity->name)}}</h3>
        @if(isset($company))
            <a href="/{{app()->getLocale()}}/jobs/partners/{{$company->slug}}" class="flex items-center gap-3 group">
                <span
                    class="text-sm underline group-hover:underline group-hover:underline-offset-2 group-hover:text-orange transition ease-in-out duration-200">{{$company->name}}</span>
                <img src="https://placehold.jp/30x30.png" alt="{{$company->name}}"
                     height="30" width="30" class="rounded-full">
            </a>
        @endif
    </div>
    <p class="text-sm">{{$opportunity->description}}
    </p>
</div>
