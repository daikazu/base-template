<link rel="stylesheet" href="https://unpkg.com/trix@2.0.0-alpha.1/dist/trix.css">
</link>
<script src="https://unpkg.com/trix@2.0.0-alpha.1/dist/trix.umd.js"></script>
<style>
    [data-trix-button-group="file-tools"] {
        display: none !important;
    }
</style>

<div x-data="{ value: '' }" x-init="$refs.trix.editor.loadHTML(value)" x-id="['trix']" class="w-full max-w-2xl"
    @trix-change="value = $refs.input.value" @trix-file-accept.prevent>
    <input :id="$id('trix')" type="hidden" x-ref="input">

    <!-- Optional .prose class added to utilize Tailwind's Typography Plugin for styling -->
    <trix-editor x-ref="trix" :input="$id('trix')" class="prose bg-white"></trix-editor>
</div>
