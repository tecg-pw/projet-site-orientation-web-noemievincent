<x-header :head_title="'resources.head_title'"/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="resources" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="resources"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('resources.title')}}</h2>
                <p class="text-lg ">{{__('resources.tagline')}}</p>
            </div>
            <div>
                <h2
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('resources.documentations_title')}}</h2>
                <div class="flex flex-col gap-20">
                    <div class="grid grid-cols-2 gap-8">
                        @foreach($documentations as $documentation)
                            <x-resources.documentation
                                :documentation="$documentation->translations->where('locale', app()->getLocale())->first()"
                                :languages="$documentation->languages"/>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <h2
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('resources.tools_title')}}</h2>
                <div class="flex flex-col gap-20">
                    <div class="grid grid-cols-2 gap-8">
                        @foreach($tools as $tool)
                            <x-resources.tool
                                :tool="$tool->translations->where('locale', app()->getLocale())->first()"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <x-aside :aside="$aside"/>
    </div>
</main>
<x-footer/>
</body>
</html>
