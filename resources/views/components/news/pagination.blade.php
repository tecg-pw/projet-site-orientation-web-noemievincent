@props([
    /** @var \mixed */
    'news'
])
<div id="pagination">
    {{$news->links()}}
</div>
