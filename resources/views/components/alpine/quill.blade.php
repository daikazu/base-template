<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<div
    x-data="{
        value: '',
        init() {
            let quill = new Quill(this.$refs.quill, { theme: 'snow' })

            quill.root.innerHTML = this.value

            quill.on('text-change', () => {
                this.value = quill.root.innerHTML
            })
        },
    }"
    class="w-full max-w-2xl bg-white"
>
    <div x-ref="quill"></div>
</div>
