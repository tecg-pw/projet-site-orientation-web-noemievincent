@props(['tutorial', 'languages', 'is_favorite'])
<div
    class="bg-white rounded-2xl border border-blue/20 p-5">
    <div class="flex flex-col gap-3">
        <div>
            <div class="flex justify-between mb-2">
                <h3 class="text-xl font-semibold hover:underline underline-offset-2 decoration-2 decoration-solid hover:text-orange transition ease-in-out duration-200">
                    <a href="{{$tutorial->link}}">
                        {{$tutorial->title}}
                    </a>
                </h3>
                <a href="#" class="relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24"
                         class="stroke-1  {{$is_favorite === true ? 'fill-orange stroke-orange' : 'fill-orange-light/0 stroke-orange-light'}} group-hover:fill-orange-light group-hover:stroke-orange-light transitionable">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M10.2135354,0.441329894 L12.5301907,5.09668871 C12.6437709,5.3306716 12.8673229,5.49423715 13.1274534,5.53368599 L18.3127795,6.28282419 C18.5232013,6.31151358 18.713271,6.4218659 18.8407265,6.58934431 C18.9681821,6.75682272 19.0224584,6.9675444 18.9914871,7.17465538 C18.9654336,7.34490401 18.8826605,7.50177662 18.7562018,7.62057098 L15.0006864,11.2592422 C14.8108765,11.4385657 14.7257803,11.7002187 14.7744505,11.9548706 L15.679394,17.0828999 C15.7448774,17.5054355 15.4552147,17.9019154 15.0278347,17.9747311 C14.8516089,18.001936 14.6711642,17.9738576 14.5120169,17.8944663 L9.88775575,15.4776038 C9.65675721,15.3522485 9.37670064,15.3522485 9.1457021,15.4776038 L4.49429266,17.9123029 C4.1040442,18.1096521 3.62530757,17.962958 3.41740993,17.5823254 C3.33635184,17.4288523 3.30778438,17.2536748 3.33596502,17.0828999 L4.24090849,11.9548706 C4.28467865,11.7005405 4.20030563,11.441111 4.01467262,11.2592422 L0.23200891,7.62057098 C-0.0773363034,7.31150312 -0.0773363034,6.81484985 0.23200891,6.50578199 C0.358259148,6.3905834 0.515216648,6.31324177 0.684480646,6.28282419 L5.86980673,5.53368599 C6.12870837,5.49136141 6.35105151,5.32868032 6.46706943,5.09668871 L8.78372471,0.441329894 C8.87526213,0.25256864 9.04026912,0.108236628 9.24131794,0.0410719808 C9.44236677,-0.0260926667 9.66241783,-0.0103975019 9.85155801,0.0845974179 C10.0076083,0.16259069 10.1343954,0.287540724 10.2135354,0.441329894 Z"
                              transform="translate(2.5 3)"/>
                    </svg>
                </a>
            </div>
            <div class="text-sm">{!! $tutorial->description !!}
            </div>
        </div>
        <ul class="flex gap-2">
            @foreach($languages as $language)
                <x-resources.languages :language="$language"/>
            @endforeach
        </ul>
    </div>
</div>
