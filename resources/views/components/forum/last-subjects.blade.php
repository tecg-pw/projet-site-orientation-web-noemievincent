<div class="flex flex-col gap-20">
    <div class="flex flex-col gap-6">
        @for($i = 0; $i < 5; $i++)
            <x-forum.article/>
        @endfor
    </div>
    <div class="bg-pink-200">
        PAGINATION
    </div>
</div>
