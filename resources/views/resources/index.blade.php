<x-header/>
<main class="px-10 flex-1 mt-6">
    <div class="lg:grid grid-cols-4 justify-between gap-12">
        <section aria-labelledby="resources" class="col-span-3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h2 id="resources"
                    class="font-display font-bold text-blue text-5xl tracking-wider uppercase">{{__('Ressources')}}</h2>
                <p class="text-lg ">{{__('Velit aliquip nulla non commodo nisi pariatur magna ut magna laboris. Culpa eu culpa ipsum dolore laboris voluptate laboris sint.')}}</p>
            </div>
            <div>
                <h2
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('Documentations')}}</h2>
                <div class="flex flex-col gap-20">
                    <div class="grid grid-cols-2 gap-8">
                        @for($i = 0; $i < 6; $i++)
                            <x-resources.documentation/>
                        @endfor
                    </div>
                </div>
            </div>
            <div>
                <h2
                    class="text-4xl font-medium uppercase tracking-wider font-display text-blue mb-6">{{__('Outils')}}</h2>
                <div class="flex flex-col gap-20">
                    <div class="grid grid-cols-2 gap-8">
                        @for($i = 0; $i < 12; $i++)
                            <x-resources.tool/>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <x-aside/>
    </div>
</main>
<x-footer/>
</body>
</html>
