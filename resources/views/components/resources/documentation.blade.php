@php
    $languages = [
    'html' => 'HTML',
    'css' => 'CSS',
    'js' => 'JavaScript',
    'php' => 'PHP',
    'mysql' => 'MySQL',
];
@endphp
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex flex-col gap-3">
        <div>
            <h3 class="mb-2 text-xl font-semibold inline hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                <a href="#">
                    {{__('Intitulé')}}
                </a>
            </h3>
            <p class="text-sm">{{__('Ad consequat nulla commodo laboris occaecat est irure excepteur anim sunt qui anim dolor Lorem et. Ad consequat nulla commodo laboris occaecat est irure excepteur anim sunt qui anim dolor Lorem et.')}}
            </p>
        </div>
        <ul class="flex gap-2">
            @foreach($languages as $slug => $name)
                <x-resources.languages :slug="$slug" :name="$name"/>
            @endforeach
        </ul>
    </div>
</div>
