@props([
    /** @var \mixed */
    'replies'
])
<div id="pagination">
    {{$replies->links()}}
</div>
