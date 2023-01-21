<script src="https://cdn.tiny.cloud/1/{{config('nova-tinymce-editor.apiKey')}}/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#wysiwyg', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: ['advlist', 'anchor', 'autolink', 'autosave', 'fullscreen', 'lists', 'link', 'image', 'media', 'table', 'code', 'wordcount', 'autoresize'],
        toolbar: 'undo redo restoredraft | h2 h3 h4 | bold italic underline strikethrough blockquote removeformat | align bullist numlist outdent indent | link anchor table | code fullscreen',
        menubar: 'file edit view format'
    });
</script>
