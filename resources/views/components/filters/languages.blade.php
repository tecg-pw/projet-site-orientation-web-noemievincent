@props(['languages'])
<div>
    <label for="languages" class="sr-only">{{__('filters.titles.language')}} :</label>
    <select name="languages" id="languages" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="languages">{{__('filters.titles.language')}}</option>
        @foreach($languages as $language)
            <option value="{{$language->slug}}">{{$language->name}}</option>
        @endforeach
    </select>
</div>
