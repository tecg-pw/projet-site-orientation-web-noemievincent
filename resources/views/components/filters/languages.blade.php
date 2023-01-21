@props(['languages'])
<div>
    <label for="language" class="sr-only">{{__('filters.titles.language')}} :</label>
    <select name="language" id="language" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="all">{{__('filters.titles.language')}}</option>
        @foreach($languages as $language)
            <option value="{{$language->slug}}" @selected(request()->input('language') == $language->slug)>{{$language->name}}</option>
        @endforeach
    </select>
</div>
