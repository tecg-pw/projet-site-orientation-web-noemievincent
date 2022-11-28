<div>
    <label for="status" class="sr-only">{{__('filters.status.all')}} :</label>
    <select name="status" id="status" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        @foreach(__('filters.status') as $value => $label)
            <option value="{{$value}}">{{$label}}</option>
        @endforeach
    </select>
</div>
