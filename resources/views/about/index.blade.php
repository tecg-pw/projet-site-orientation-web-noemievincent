<x-header :head_title="'about.head_title'"/>
<main class="px-10 flex-1 mt-6">
    <div class="xl:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="about" class="col-span-3 flex flex-col gap-8">
            <h2 id="about"
                class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('about.title')}}</h2>
            <p>
                {{__('about.tagline')}}
            </p>
            <div class="flex flex-col gap-12">
                <section aria-labelledby="classes">
                    <div class="flex flex-col gap-3 mb-6">
                        <h2 id="classes"
                            class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('classes.title')}}</h2>
                        {!! __('classes.tagline') !!}
                        <p>
                            {{__('classes.description')}}
                        </p>
                    </div>
                    <div class="flex flex-col gap-8">
                        <div class="bg-blue-card p-5 rounded-lg">
                            <h3 class="text-2xl font-semibold mb-3">{{__('classes.years.1')}}</h3>
                            <div class="grid grid-cols-3 gap-12">
                                <div class="">
                                    <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.common')}}</h4>
                                    <ul class="flex flex-col gap-2">
                                        @foreach($courses as $course)
                                            @if($course->year == 1 && $course->orientation == 'common')
                                                <li><p class="flex justify-between">
                                                        <span>{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                    </p></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="">
                                    <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.web')}}</h4>
                                    <ul class="flex flex-col gap-2">
                                        @foreach($courses as $course)
                                            @if($course->year == 1 && $course->orientation == 'web')
                                                <li><a href="/{{app()->getLocale()}}/classes/{{$course->slug}}"
                                                       class="flex justify-between hover:text-orange transition-all ease-in-out duration-200">
                                                        <span
                                                            class="underline underline-offset-2">{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                    </a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.dg')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 1 && $course->orientation == 'dg')
                                                    <li><p class="flex justify-between">
                                                            <span>{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </p></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.3d')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 1 && $course->orientation == '3d')
                                                    <li><p class="flex justify-between">
                                                            <span>{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </p></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between gap-8 items-start">
                            <div class="bg-blue-card p-5 rounded-lg flex-1">
                                <h3 class="text-2xl font-semibold mb-3">{{__('classes.years.2')}}</h3>
                                <div class="flex flex-col gap-4">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.common')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 2 && $course->orientation == 'common')
                                                    <li><p class="flex justify-between">
                                                            <span>{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </p></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.web')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 2 && $course->orientation == 'web')
                                                    <li><a href="/{{app()->getLocale()}}/classes/{{$course->slug}}"
                                                           class="flex justify-between hover:text-orange transition-all ease-in-out duration-200">
                                                        <span
                                                            class="underline underline-offset-2">{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-blue-card p-5 rounded-lg flex-1">
                                <h3 class="text-2xl font-semibold mb-3">{{__('classes.years.3')}}</h3>
                                <div class="flex flex-col gap-4">
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.common')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 3 && $course->orientation == 'common')
                                                    <li><p class="flex justify-between">
                                                            <span>{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </p></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="">
                                        <h4 class="text-lg font-semibold mb-2">{{__('classes.orientation.web')}}</h4>
                                        <ul class="flex flex-col gap-2">
                                            @foreach($courses as $course)
                                                @if($course->year == 3 && $course->orientation == 'web')
                                                    <li><a href="/{{app()->getLocale()}}/classes/{{$course->slug}}"
                                                           class="flex justify-between hover:text-orange transition-all ease-in-out duration-200">
                                                        <span
                                                            class="underline underline-offset-2">{{$course->name}}</span><span>{{$course->hours}}h</span>
                                                        </a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section aria-labelledby="teachers">
                    <h2 id="teachers"
                        class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('teachers.title')}}</h2>
                    <div class="grid grid-cols-3 gap-8">
                        @foreach($teachers as $teacher)
                            <x-about.teacher :teacher="$teacher"/>
                        @endforeach
                    </div>
                </section>
                <section aria-labelledby="opportunities">
                    <div class="flex flex-col gap-2 mb-6">
                        <h2 id="opportunities"
                            class="text-4xl font-medium uppercase tracking-wider font-display text-blue">{{__('opportunities.title')}}</h2>
                        {!! __('opportunities.tagline') !!}
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        @foreach($opportunities as $opportunity)
                            <x-about.opportunity :opportunity="$opportunity"/>
                        @endforeach
                    </div>
                </section>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>
