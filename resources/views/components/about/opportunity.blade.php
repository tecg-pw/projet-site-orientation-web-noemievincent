@props([
    'company', 'opportunity'
])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex flex-col justify-between mb-2 sm:flex-row">
        <h3 class="text-xl font-semibold">{{ucfirst($opportunity->name)}}</h3>
        @if(isset($company))
            <a href="/{{app()->getLocale()}}/jobs/partners/{{$company->slug}}"
               class="group flex flex-row-reverse justify-end items-center gap-3 sm:flex-row sm:justify-start">
                <span
                    class="text-sm underline group-hover:underline group-hover:underline-offset-2 group-hover:text-orange transition ease-in-out duration-200">{{$company->name}}</span>
                <picture>
                    @if($company->srcset && $company->srcset['small'])
                        @foreach($company->srcset['small'] as $size => $path)
                            <source media="({{$size === '640' ? 'max' : 'min'}}-width: {{$size}}px)"
                                    srcset="/{{$path}}">
                        @endforeach
                    @endif
                    <img
                        src="{{$company->pictures && $company->pictures['small'] ? '/' . $company->pictures['small'] : '/img/placeholders/logo-30x30.png'}}"
                        alt="{{$company->name}}" class="rounded-full">
                </picture>
            </a>
        @endif
    </div>
    <div class="text-sm">{!! $opportunity->description !!}
    </div>
</div>
