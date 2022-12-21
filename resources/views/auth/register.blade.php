<x-header :head_title="'auth.register.head_title'"/>
<main class="px-10 flex-1 xl:mx-96 mt-12">
    <section aria-labelledby="register" class="col-start-2">
        <div class="mb-8">
            <h2 id="register"
                class="uppercase font-display font-bold text-4xl text-blue">{{__('auth.register.title')}}</h2>
            <p>{{__('auth.register.tagline')}}</p>
        </div>
        <form action="/{{app()->getLocale()}}/register" method="post" class="flex flex-col gap-4">
            @csrf
            <div class="flex justify-between gap-3">
                <x-forms.firstname-field/>
                <x-forms.lastname-field/>
            </div>
            <x-forms.email-field/>
            <x-forms.password-field/>
            <div class="flex justify-between gap-16 items-center mt-6">
                {!! __('auth.register.login_link', ['locale' => app()->getLocale()]) !!}
                <button type="submit" dusk="submit-credentials"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transition-all ease-in-out duration-200">
                    {{__('forms.buttons.register')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>
