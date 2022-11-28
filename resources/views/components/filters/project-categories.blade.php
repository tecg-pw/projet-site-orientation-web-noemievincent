@props(['categories'])
<div>
    <label for="category" class="sr-only">{{__('filters.titles.category')}} :</label>
    <select name="category" id="category" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="category">{{__('filters.titles.category')}}</option>
        @foreach($categories as $category)
            <option value="{{$category->name}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>
