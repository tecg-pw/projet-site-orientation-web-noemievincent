@props(['head_title'])
    <!doctype html>
<html lang="fr" class="bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="L'option Web forme des spécialistes en design Web, en design d’interaction et en développement d'applications mobiles. ">
    <meta name="keywords"
          content="HEPL, Bachelier en Web, Technique Graphique, Design Web, Développement d'applications mobiles, Développement front-end, Développement back-end">
    <meta name="author" content="Noémie Vincent">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__($head_title)}} - Web Design</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<div
    class="text-center bg-red-300 sm:bg-orange-200 md:bg-yellow-200 lg:bg-green-200 xl:bg-cyan-300 2xl:bg-purple-200 transition ease-in-out duration-700">
    <p class="after:content-['phone'] sm:after:content-['tablet'] md:after:content-['small_screen'] lg:after:content-['default_screen'] xl:after:content-['large_screen'] 2xl:after:content-['extra_large_screen']">
        size for : </p>
</div>
<body class="text-blue-dark font-body flex flex-col h-screen selection:bg-blue-light">
<h1 class="sr-only">
    {{__('header.title')}}
</h1>
<header class="uppercase text-blue mb-16 h-full relative lg:mb-0">
    <input id="toggle" class="toggle absolute hidden" type="checkbox">
    <div class="bg-blue-light top-bar w-full px-4 py-4 flex justify-between fixed z-50 lg:hidden">
        <a href="/">
            <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg"
                 height="24" viewBox="0 0 130 35"
                 xml:space="preserve" class="fill-blue-dark hover:fill-orange transition ease-in-out duration-200"
                 aria-labelledby="logoTitle">
                <title id="logoTitle">{{__('header.home_link')}}</title>
                <g>
                    <g transform="translate(4)">
                        <path d="M74.5,10.4h2.2l1.9,7.2l2.1-7.2h1.5l2.1,7.2l1.9-7.2h2.2l-2.9,9.9h-2.2l-1.9-6.2l-1.9,6.2
                h-2.2L74.5,10.4z"/>
                        <path d="M89.9,10.4h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4v2.4h3.6v1.7h-5.5V10.4z"/>
                        <path d="M97.2,10.4h2.8c0.8-0.1,1.6,0.2,2.2,0.6c0.6,0.5,0.9,1.2,0.8,1.9c0.1,0.9-0.4,1.8-1.3,2.2
                c0.6,0.1,1.2,0.4,1.6,0.8c0.4,0.5,0.6,1.1,0.6,1.7c0,0.8-0.3,1.5-0.9,2c-0.7,0.5-1.5,0.7-2.3,0.7h-3.6L97.2,10.4L97.2,10.4z
                 M99.6,14.4c0.4,0,0.8-0.1,1.2-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.8-0.5-1.2-1.6-1.2h-0.4v2.5h0.4V14.4z M100.1,18.8
                c1.2,0,1.8-0.4,1.8-1.3c0-0.4-0.2-0.8-0.5-1c-0.4-0.3-0.9-0.4-1.4-0.4h-1v2.7C99,18.8,100.1,18.8,100.1,18.8z"/>
                        <path d="M75.6,24.8h2.7c0.7,0,1.4,0.1,2,0.4c1.2,0.5,2.2,1.5,2.7,2.7c0.3,0.6,0.4,1.2,0.4,1.9
                c0,0.7-0.1,1.3-0.4,1.9c-0.3,0.6-0.6,1.1-1.1,1.6c-0.4,0.5-1,0.8-1.6,1c-0.6,0.2-1.3,0.4-2,0.4h-2.7V24.8z M78.1,33
                c0.6,0,1.1-0.1,1.6-0.4c0.4-0.3,0.8-0.7,1.1-1.1c0.3-0.5,0.4-1,0.4-1.6c0-0.6-0.1-1.1-0.4-1.6c-0.2-0.5-0.6-0.9-1.1-1.1
                c-0.5-0.3-1-0.4-1.6-0.4h-0.6V33H78.1z"/>
                        <path d="M85.3,24.8h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4V33h3.6v1.7h-5.5V24.8z"/>
                        <path d="M94.1,34.6c-0.4-0.2-0.8-0.4-1.2-0.6c-0.3-0.2-0.6-0.4-0.8-0.6l1-1.6c0.2,0.2,0.5,0.4,0.7,0.5
                c0.3,0.2,0.6,0.4,0.9,0.5c0.4,0.1,0.7,0.2,1.1,0.2c0.4,0,0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.3-0.1-0.6-0.3-0.8
                c-0.2-0.2-0.5-0.4-0.8-0.5c-0.4-0.1-0.7-0.3-1.1-0.5c-0.3-0.2-0.7-0.4-1-0.6c-0.3-0.2-0.6-0.5-0.7-0.8c-0.2-0.3-0.4-0.7-0.3-1.1
                c0-0.5,0.1-1,0.4-1.4c0.3-0.4,0.7-0.8,1.1-1.1c0.5-0.3,1.1-0.4,1.7-0.4c0.4,0,0.7,0,1.1,0.1c0.4,0.1,0.7,0.2,1,0.4
                c0.3,0.1,0.5,0.3,0.8,0.5l-0.8,1.5l-0.9-0.6c-0.3-0.2-0.7-0.2-1.1-0.2c-0.4,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.5-0.4,0.8
                c0,0.2,0.1,0.4,0.2,0.5c0.1,0.2,0.3,0.3,0.5,0.4c0.3,0.1,0.5,0.2,0.8,0.3c0.6,0.2,1.1,0.5,1.6,0.8c0.4,0.3,0.8,0.6,1.1,1
                c0.3,0.4,0.4,0.9,0.4,1.4c0,0.6-0.2,1.1-0.5,1.6c-0.3,0.5-0.8,0.8-1.3,1c-0.6,0.2-1.2,0.4-1.9,0.4C95.2,34.9,94.6,34.8,94.1,34.6z
                "/>
                        <path d="M101.4,24.8h1.9v9.9h-1.9V24.8z"/>
                        <path d="M108.2,34.5c-0.6-0.2-1.1-0.6-1.5-1.1c-0.4-0.5-0.8-1-1-1.6c-0.5-1.3-0.5-2.7-0.1-4
                c0.2-0.6,0.6-1.1,1-1.6c0.4-0.5,1-0.9,1.6-1.1c0.7-0.3,1.4-0.4,2.1-0.4c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.5,1.7,0.9l-0.9,1.5
                c-0.4-0.3-0.8-0.6-1.3-0.8c-0.5-0.2-1-0.3-1.5-0.3c-0.6,0-1.1,0.1-1.6,0.4c-0.4,0.3-0.8,0.7-1,1.2c-0.2,0.5-0.3,1.1-0.3,1.7
                c0,0.6,0.1,1.2,0.4,1.8c0.3,0.5,0.6,0.9,1,1.2c0.4,0.3,0.9,0.4,1.4,0.4c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,0.9-0.8
                c0.2-0.3,0.3-0.7,0.3-1.1v-0.1h-2.6v-1.5h4.6v1.5c0,0.6-0.1,1.2-0.4,1.7c-0.3,0.5-0.6,0.9-1,1.3c-0.4,0.4-0.9,0.7-1.5,0.8
                c-0.5,0.2-1.1,0.3-1.7,0.3C109.3,34.9,108.7,34.8,108.2,34.5z"/>
                        <path d="M116.7,24.8h1.9l4.3,6.7v-6.7h1.9v9.9h-1.9l-4.3-6.7v6.7h-1.9V24.8z"/>
                    </g>
                    <g>
                        <path
                            d="M0,0h7.6l6.6,25.3L21.5,0h5.1L34,25.3L40.5,0h7.6l-10,34.6h-7.6L24,13.1l-6.5,21.5H10L0,0z"/>
                        <path d="M44.5,0H54c2.4,0,4.7,0.4,6.9,1.3c2.1,0.9,4,2.1,5.6,3.7c3.3,3.2,5.1,7.7,5,12.3
                c0.1,4.6-1.7,9.1-5,12.3c-1.6,1.6-3.5,2.9-5.6,3.7c-2.2,0.9-4.5,1.3-6.9,1.3h-9.5V0z M53.3,28.6c2,0,3.9-0.5,5.6-1.5
                c1.6-1,2.9-2.4,3.9-4c1-1.8,1.5-3.8,1.4-5.8c0-2-0.5-4-1.4-5.8c-0.9-1.7-2.2-3.1-3.9-4c-1.7-1-3.6-1.5-5.6-1.5h-2v22.5h2V28.6z"/>
                    </g>
                </g>
            </svg>
            <span class="sr-only">{{__('header.home_link')}}</span>
        </a>
        <div class="burgermenu w-6 h-5 relative">
            <label for="toggle"
                   class="hamburger w-full h-full flex flex-col justify-between">
                <span class="top-bun"></span>
                <span class="meat"></span>
                <span class="bottom-bun"></span>
                <span class="hidden">{{__('header.open_menu')}}</span>
            </label>
        </div>
    </div>
    <div
        class="menu bg-blue-light px-4 py-6 flex flex-col gap-10 fixed z-[100] top-14 h-full left-full -right-[150%] transition-position ease-in-out duration-700 lg:static lg:flex-col-reverse lg:bg-transparent lg:p-0 lg:gap-0">
        <nav class="lg:bg-white/60 lg:px-10 lg:py-6">
            <h2 class="sr-only">{{__('header.main_nav_title')}}</h2>
            <div class="flex flex-col gap-8 lg:flex-row lg:justify-between lg:items-center">
                <a href="/" class="hidden lg:block">
                    <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg"
                         height="24" viewBox="0 0 130 35"
                         xml:space="preserve"
                         class="fill-blue-dark hover:fill-orange transition-all ease-in-out duration-200"
                         aria-labelledby="logoTitle">
                                <title id="logoTitle">{{__('header.home_link')}}</title>
                        <g>
                            <g transform="translate(4)">
                                <path d="M74.5,10.4h2.2l1.9,7.2l2.1-7.2h1.5l2.1,7.2l1.9-7.2h2.2l-2.9,9.9h-2.2l-1.9-6.2l-1.9,6.2
                    h-2.2L74.5,10.4z"/>
                                <path d="M89.9,10.4h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4v2.4h3.6v1.7h-5.5V10.4z"/>
                                <path d="M97.2,10.4h2.8c0.8-0.1,1.6,0.2,2.2,0.6c0.6,0.5,0.9,1.2,0.8,1.9c0.1,0.9-0.4,1.8-1.3,2.2
                    c0.6,0.1,1.2,0.4,1.6,0.8c0.4,0.5,0.6,1.1,0.6,1.7c0,0.8-0.3,1.5-0.9,2c-0.7,0.5-1.5,0.7-2.3,0.7h-3.6L97.2,10.4L97.2,10.4z
                     M99.6,14.4c0.4,0,0.8-0.1,1.2-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.8-0.5-1.2-1.6-1.2h-0.4v2.5h0.4V14.4z M100.1,18.8
                    c1.2,0,1.8-0.4,1.8-1.3c0-0.4-0.2-0.8-0.5-1c-0.4-0.3-0.9-0.4-1.4-0.4h-1v2.7C99,18.8,100.1,18.8,100.1,18.8z"/>
                                <path d="M75.6,24.8h2.7c0.7,0,1.4,0.1,2,0.4c1.2,0.5,2.2,1.5,2.7,2.7c0.3,0.6,0.4,1.2,0.4,1.9
                    c0,0.7-0.1,1.3-0.4,1.9c-0.3,0.6-0.6,1.1-1.1,1.6c-0.4,0.5-1,0.8-1.6,1c-0.6,0.2-1.3,0.4-2,0.4h-2.7V24.8z M78.1,33
                    c0.6,0,1.1-0.1,1.6-0.4c0.4-0.3,0.8-0.7,1.1-1.1c0.3-0.5,0.4-1,0.4-1.6c0-0.6-0.1-1.1-0.4-1.6c-0.2-0.5-0.6-0.9-1.1-1.1
                    c-0.5-0.3-1-0.4-1.6-0.4h-0.6V33H78.1z"/>
                                <path d="M85.3,24.8h5.5v1.7h-3.6v2.4h3.4v1.7h-3.4V33h3.6v1.7h-5.5V24.8z"/>
                                <path d="M94.1,34.6c-0.4-0.2-0.8-0.4-1.2-0.6c-0.3-0.2-0.6-0.4-0.8-0.6l1-1.6c0.2,0.2,0.5,0.4,0.7,0.5
                    c0.3,0.2,0.6,0.4,0.9,0.5c0.4,0.1,0.7,0.2,1.1,0.2c0.4,0,0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.4-0.9c0-0.3-0.1-0.6-0.3-0.8
                    c-0.2-0.2-0.5-0.4-0.8-0.5c-0.4-0.1-0.7-0.3-1.1-0.5c-0.3-0.2-0.7-0.4-1-0.6c-0.3-0.2-0.6-0.5-0.7-0.8c-0.2-0.3-0.4-0.7-0.3-1.1
                    c0-0.5,0.1-1,0.4-1.4c0.3-0.4,0.7-0.8,1.1-1.1c0.5-0.3,1.1-0.4,1.7-0.4c0.4,0,0.7,0,1.1,0.1c0.4,0.1,0.7,0.2,1,0.4
                    c0.3,0.1,0.5,0.3,0.8,0.5l-0.8,1.5l-0.9-0.6c-0.3-0.2-0.7-0.2-1.1-0.2c-0.4,0-0.7,0.1-1,0.3c-0.2,0.2-0.4,0.5-0.4,0.8
                    c0,0.2,0.1,0.4,0.2,0.5c0.1,0.2,0.3,0.3,0.5,0.4c0.3,0.1,0.5,0.2,0.8,0.3c0.6,0.2,1.1,0.5,1.6,0.8c0.4,0.3,0.8,0.6,1.1,1
                    c0.3,0.4,0.4,0.9,0.4,1.4c0,0.6-0.2,1.1-0.5,1.6c-0.3,0.5-0.8,0.8-1.3,1c-0.6,0.2-1.2,0.4-1.9,0.4C95.2,34.9,94.6,34.8,94.1,34.6z
                    "/>
                                <path d="M101.4,24.8h1.9v9.9h-1.9V24.8z"/>
                                <path d="M108.2,34.5c-0.6-0.2-1.1-0.6-1.5-1.1c-0.4-0.5-0.8-1-1-1.6c-0.5-1.3-0.5-2.7-0.1-4
                    c0.2-0.6,0.6-1.1,1-1.6c0.4-0.5,1-0.9,1.6-1.1c0.7-0.3,1.4-0.4,2.1-0.4c0.6,0,1.3,0.1,1.9,0.3c0.6,0.2,1.2,0.5,1.7,0.9l-0.9,1.5
                    c-0.4-0.3-0.8-0.6-1.3-0.8c-0.5-0.2-1-0.3-1.5-0.3c-0.6,0-1.1,0.1-1.6,0.4c-0.4,0.3-0.8,0.7-1,1.2c-0.2,0.5-0.3,1.1-0.3,1.7
                    c0,0.6,0.1,1.2,0.4,1.8c0.3,0.5,0.6,0.9,1,1.2c0.4,0.3,0.9,0.4,1.4,0.4c0.4,0,0.8-0.1,1.2-0.3c0.4-0.2,0.7-0.4,0.9-0.8
                    c0.2-0.3,0.3-0.7,0.3-1.1v-0.1h-2.6v-1.5h4.6v1.5c0,0.6-0.1,1.2-0.4,1.7c-0.3,0.5-0.6,0.9-1,1.3c-0.4,0.4-0.9,0.7-1.5,0.8
                    c-0.5,0.2-1.1,0.3-1.7,0.3C109.3,34.9,108.7,34.8,108.2,34.5z"/>
                                <path d="M116.7,24.8h1.9l4.3,6.7v-6.7h1.9v9.9h-1.9l-4.3-6.7v6.7h-1.9V24.8z"/>
                            </g>
                            <g>
                                <path
                                    d="M0,0h7.6l6.6,25.3L21.5,0h5.1L34,25.3L40.5,0h7.6l-10,34.6h-7.6L24,13.1l-6.5,21.5H10L0,0z"/>
                                <path d="M44.5,0H54c2.4,0,4.7,0.4,6.9,1.3c2.1,0.9,4,2.1,5.6,3.7c3.3,3.2,5.1,7.7,5,12.3
                    c0.1,4.6-1.7,9.1-5,12.3c-1.6,1.6-3.5,2.9-5.6,3.7c-2.2,0.9-4.5,1.3-6.9,1.3h-9.5V0z M53.3,28.6c2,0,3.9-0.5,5.6-1.5
                    c1.6-1,2.9-2.4,3.9-4c1-1.8,1.5-3.8,1.4-5.8c0-2-0.5-4-1.4-5.8c-0.9-1.7-2.2-3.1-3.9-4c-1.7-1-3.6-1.5-5.6-1.5h-2v22.5h2V28.6z"/>
                            </g>
                        </g>
                            </svg>
                </a>
                <ul class="flex flex-col gap-4 lg:flex-row lg:gap-24">
                    @foreach(__('header.main_nav_items') as $slug => $name)
                        <li><a href="/{{$slug}}"
                               class="font-semibold {{Request::is($slug) ? 'lg:font-bold' : 'lg:font-normal'}} hover:text-orange transition-all ease-in-out duration-200">{{$name}}</a>
                        </li>
                    @endforeach
                </ul>
                <a href="/search" class="flex gap-2 items-center">
                    <span class="font-semibold lg:sr-only">{{__('header.search')}}</span>
                    <svg version="1.1" id="search" xmlns="http://www.w3.org/2000/svg"
                         height="18" width="18" viewBox="0 0 30 30" xml:space="preserve"
                         class="fill-blue-dark">
                        <path d="M20.6,19.1c4.1-4.9,3.5-12.3-1.5-16.4S6.8-0.8,2.7,4.2s-3.5,12.3,1.5,16.4c2.1,1.8,4.7,2.7,7.5,2.7
                                        c2.7,0,5.4-1,7.5-2.7l9.1,9.1c0.4,0.4,1.1,0.4,1.5,0c0.4-0.4,0.4-1.1,0-1.5L20.6,19.1z M11.6,21.2c-5.3,0-9.5-4.3-9.5-9.5
                                        s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5C21.2,16.9,16.9,21.2,11.6,21.2C11.6,21.2,11.6,21.2,11.6,21.2z"/>
                    </svg>
                </a>
            </div>
        </nav>
        <div
            class="space-y-10 lg:space-y-0 lg:bg-blue-light lg:flex lg:flex-row-reverse lg:items-center lg:justify-between lg:px-10 lg:py-3 lg:text-sm">
            <div class="space-y-10 lg:space-y-0 lg:flex lg:flex-row lg:gap-16">
                <nav>
                    <h2 class="sr-only">{{__('header.sub_nav_title')}}</h2>
                    <ul class="flex flex-col gap-3 lg:flex-row lg:gap-8">
                        @foreach(__('header.sub_nav_items') as $slug => $name)
                            <li><a href="/{{$slug}}"
                                   class="{{Request::is($slug) ? 'lg:font-bold' : ''}} hover:text-orange transition-all ease-in-out duration-200">{{$name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <ul class="flex gap-2">
                    <li><a href="#"
                           class="font-bold hover:text-orange transition-all ease-in-out duration-200">FR</a>
                    </li>
                    <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">EN</a></li>
                    <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">DE</a></li>
                    <li><a href="#" class="hover:text-orange transition-all ease-in-out duration-200">NL</a></li>
                </ul>
            </div>
            <div>
                @guest
                    <div>
                        <a href="/login" class="flex items-center gap-3">
                            <img src="https://placehold.jp/30x30.png" alt="{{__('header.login_link')}}"
                                 class="rounded-full h-full">
                            <span
                                class="text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('header.login_link')}}</span>
                        </a>
                    </div>
                @endguest
                @auth
                    <div class="flex flex-col gap-2 lg:flex-row lg:items-center">
                        <a href="/profile" class="flex items-center gap-3">
                            <img src="https://placehold.jp/30x30.png" alt="Prénom Nom"
                                 class="rounded-full">
                            <span
                                class="hover:text-orange transition-all ease-in-out duration-200">Prénom Nom</span>
                        </a>
                        <span class="hidden lg:block">—</span>
                        <a href="/logout"
                           class="text-orange-dark hover:underline hover:underline-offset-2 hover:decoration-2 hover:decoration-solid">{{__('header.logout_link')}}</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>
