@props(['locations'])
<div>
    <label for="location" class="sr-only">{{__('filters.titles.location')}} :</label>
    <select name="location" id="location" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="location">{{__('filters.titles.location')}}</option>
        @foreach($locations as $location)
            <option value="{{strtolower($location->location)}}">{{$location->location}}</option>
        @endforeach
    </select>
</div>
