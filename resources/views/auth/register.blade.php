<x-header :head_title="'auth.register.head_title'"/>
<main class="main xl:mx-64">
    <section aria-labelledby="register" class="col-start-2">
        <div class="mb-8">
            <h2 id="register"
                class="h2">{{__('auth.register.title')}}</h2>
            <p>{{__('auth.register.tagline')}}</p>
        </div>
        <form action="/{{app()->getLocale()}}/register" method="post" class="flex flex-col gap-4">
            @csrf
            <div class="flex flex-col justify-between gap-3 sm:flex-row">
                <x-forms.firstname-field/>
                <x-forms.lastname-field/>
            </div>
            <x-forms.email-field/>
            <x-forms.password-field/>
            <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:justify-between sm:gap-16 sm:items-center">
                {!! __('auth.register.login_link', ['locale' => app()->getLocale()]) !!}
                <button type="submit" dusk="submit-credentials"
                        class="uppercase font-light bg-orange text-white py-2 px-6 rounded-lg hover:bg-orange-dark transitionable">
                    {{__('forms.buttons.register')}}
                </button>
            </div>
        </form>
    </section>
</main>
<x-footer/>
</body>
</html>
