@props(['companies'])
<div>
    <label for="agency" class="sr-only">{{__('filters.titles.agency')}} :</label>
    <select name="agency" id="agency" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="agency">{{__('filters.titles.agency')}}</option>
        @foreach($companies as $company)
            <option value="{{$company->slug}}">{{$company->name}}</option>
        @endforeach
    </select>
</div>
