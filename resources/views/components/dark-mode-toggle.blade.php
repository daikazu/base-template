<div
    x-data="{
        mode: 'dark',
        init() {
            if (
                window.localStorage.getItem('theme') === 'dark' ||
                (! window.localStorage.getItem('theme') &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                document.documentElement.classList.add('dark')
                window.localStorage.setItem('theme', 'dark')
                this.mode = 'dark'
            } else {
                document.documentElement.classList.remove('dark')
                window.localStorage.setItem('theme', 'light')
                this.mode = 'light'
            }
        },
        toggleDarkMode() {
            if (window.localStorage.getItem('theme') === 'dark') {
                window.localStorage.setItem('theme', 'light')
                document.documentElement.classList.remove('dark')
                this.mode = 'light'
            } else {
                window.localStorage.setItem('theme', 'dark')
                document.documentElement.classList.add('dark')
                this.mode = 'dark'
            }
        },
    }"
    {{ $attributes->merge(["class" => ""]) }}
>
    <button type="button" x-on:click="toggleDarkMode()" title="toggle dark mode">
        <x-heroicon-o-sun x-show="mode === 'dark'" class="h-6 w-6 shrink-0 text-gray-400" aria-hidden="true" />
        <x-heroicon-o-moon x-show="mode === 'light'" class="h-6 w-6 shrink-0 text-gray-400" aria-hidden="true" />
        <span class="sr-only">Toggle Dark Mode</span>
    </button>
</div>
