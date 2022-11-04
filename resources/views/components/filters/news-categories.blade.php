<div>
    <label for="category" class="sr-only">{{__('Catégorie')}} :</label>
    <select name="category" id="category" class="rounded-lg pl-3 pr-9 py-1 bg-white border border-blue/40">
        <option value="category">Catégorie</option>
        @for($i = 1; $i < 5; $i++)
            <option value="category-{{$i}}">Catégorie {{$i}}</option>
        @endfor
    </select>
</div>
