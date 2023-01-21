<x-header :head_title="'auth.forgot_password.head_title'"/>
<main class="main xl:mx-64">
    <section aria-labelledby="forgot-password" class="col-start-2 flex flex-col gap-12">
        <div class="flex flex-col gap-4">
            <h2 id="forgot-password"
                class="h2">{{__('auth.forgot_password.title')}}</h2>
            <p>{{__('auth.forgot_password.tagline')}}</p>
        </div>
        <div>
            @if(session('status'))
                <div class="py-6">
                    <p>{{session('status')}}</p>
                </div>
            @else
                <form action="/{{app()->getLocale()}}/forgot-password" method="post" class="flex flex-col gap-4 mb-12">
                    @csrf
                    <x-forms.email-field/>
                    <button type="submit"
                            class="uppercase font-light bg-orange text-white py-2 self-start px-6 rounded-lg hover:bg-orange-dark transitionable">
                        {{__('forms.buttons.forgot_password')}}
                    </button>
                </form>
            @endif
        </div>
        <a href="/{{app()->getLocale()}}/login"
           class="flex items-center gap-2 text-orange hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="20" class="fill-orange h-full">
                <g>
                    <rect width="24" height="24" opacity="0" transform="rotate(90 12 12)"/>
                    <path
                        d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"/>
                </g>
            </svg>
            <span>{{__('auth.forgot_password.back_to_login_link')}}</span>
        </a>
    </section>
</main>
<x-footer/>
</body>
</html>
