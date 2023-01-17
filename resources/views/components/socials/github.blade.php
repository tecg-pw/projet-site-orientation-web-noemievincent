@props([
    'link',
    'id',
    'name'
])
<a href="{{$link}}">
    <svg version="1.1" id="{{$id}}-github-svg" xmlns="http://www.w3.org/2000/svg"
         x="0px" y="0px" height="36"
         viewBox="0 0 20 19.5" style="enable-background:new 0 0 20 19.5;"
         aria-labelledby="{{$id}}-github"
         xml:space="preserve">
                                            <title
                                                id="{{$id}}-github">{{__('alumnis.single.github_link', ['name' => $name])}}</title>
        <style type="text/css">
            .github_gray {
                fill-rule: evenodd;
                clip-rule: evenodd;
                fill: #1B1F23;
            }
        </style>
        <path class="github_gray" d="M10,0C4.5,0,0,4.5,0,10c0,4.4,2.9,8.2,6.8,9.5c0.5,0.1,0.7-0.2,0.7-0.5c0-0.2,0-1,0-1.9C5,17.6,4.3,16.5,4.2,16
                                            c-0.1-0.3-0.6-1.2-1-1.4c-0.3-0.2-0.8-0.6,0-0.7c0.8,0,1.4,0.7,1.5,1C5.6,16.4,7,16,7.6,15.8c0.1-0.6,0.3-1.1,0.6-1.3
                                            C6,14.2,3.7,13.3,3.7,9.5c0-1.1,0.4-2,1-2.7C4.6,6.5,4.2,5.5,4.8,4.1c0,0,0.8-0.3,2.8,1C8.3,4.9,9.2,4.8,10,4.8
                                            c0.8,0,1.7,0.1,2.5,0.3c1.9-1.3,2.8-1,2.8-1c0.5,1.4,0.2,2.4,0.1,2.7c0.6,0.7,1,1.6,1,2.7c0,3.8-2.3,4.7-4.6,4.9
                                            c0.4,0.3,0.7,0.9,0.7,1.9c0,1.3,0,2.4,0,2.8c0,0.3,0.2,0.6,0.7,0.5c4-1.3,6.8-5.1,6.8-9.5C20,4.5,15.5,0,10,0z"/>
                                        </svg>
</a>