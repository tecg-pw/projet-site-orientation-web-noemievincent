@props([
    'projects'
])
<div class="flex flex-col justify-items-center gap-8 sm:grid sm:grid-cols-2 lg:grid-cols-3" id="loop">
    @foreach($projects as $projectRef)
        <x-projects.article
                :project="$projectRef->translations->where('locale', app()->getLocale())->first()"
                :student="$projectRef->student->translations->where('locale', app()->getLocale())->first()"
                :all-categories="$projectRef->categories"/>
    @endforeach
</div>
