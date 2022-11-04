<div>
    <label for="agency" class="sr-only">{{__('Agence')}} :</label>
    <select name="agency" id="agency" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="agency">Agence</option>
        @for($i = 1; $i < 5; $i++)
            <option value="agency-{{$i}}">Agence {{$i}} (x)</option>
        @endfor
    </select>
</div>
