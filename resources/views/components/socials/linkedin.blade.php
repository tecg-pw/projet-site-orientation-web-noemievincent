@props([
    'link',
    'id',
    'name'
])
<a href="{{$link}}">
    <svg version="1.1" id="{{$id}}-linkedin-svg" xmlns="http://www.w3.org/2000/svg"
         x="0px" y="0px" height="36"
         viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
         aria-labelledby="{{$id}}-linkedin"
         xml:space="preserve">
                                            <title
                                                    id="{{$id}}-linkedin">{{__('alumnis.single.linkedin_link', ['name' => $name])}}</title>
        <style type="text/css">
            .linkedin-blue {
                fill: #006699;
            }

            .linkedin-white {
                fill-rule: evenodd;
                clip-rule: evenodd;
                fill: #FFFFFF;
            }
        </style>
        <g>
            <path class="linkedin-blue" d="M0,1.5C0,0.6,0.7,0,1.5,0h17C19.3,0,20,0.6,20,1.5v17.2
            c0,0.8-0.7,1.5-1.5,1.5h-17c-0.8,0-1.5-0.6-1.5-1.5V1.5z"/>
            <path class="linkedin-white" d="M6.1,16.8V7.8H3v9.1C3,16.8,6.1,16.8,6.1,16.8z M4.5,6.5
            c1.1,0,1.7-0.7,1.7-1.6c0-0.9-0.7-1.6-1.7-1.6S2.8,4.1,2.8,5C2.8,5.8,3.5,6.5,4.5,6.5L4.5,6.5L4.5,6.5z"/>
            <path class="linkedin-white" d="M7.7,16.8h3v-5.1c0-0.3,0-0.6,0.1-0.7c0.2-0.6,0.7-1.1,1.6-1.1
            c1.1,0,1.5,0.8,1.5,2.1v4.9h3v-5.2c0-2.8-1.5-4.1-3.5-4.1c-1.6,0-2.3,0.9-2.7,1.5h0V7.8h-3C7.8,8.6,7.7,16.8,7.7,16.8L7.7,16.8z"/>
        </g>
                                        </svg>
</a>
