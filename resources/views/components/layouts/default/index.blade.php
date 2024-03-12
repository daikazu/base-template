@props(["main" => null])
<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @stack("prefetch")
        {{ seo()->render() }}
        <x-layouts.common.tracking />
        @googlefonts()
        @livewireStyles()
        @vite(["resources/css/app.css", "resources/js/app.js"])
        @stack("styles")
        @stack("head")
    </head>

    <body
        @class([
            "flex min-h-screen flex-col bg-gray-100 text-gray-800 antialiased dark:bg-gray-800 dark:text-gray-100",
            "debug-screens" => config("app.debug"),
        ])
    >
        @stack("body")
        <x-layouts.common.no-script />
        <x-layouts.common.skip-to-content />
        <x-layouts.default.header />

        @if ($main instanceof \Illuminate\View\ComponentSlot)
            <main id="content" {{ $main->attributes->class(["flex flex-1 flex-col"]) }}>
                {{ $main }}
            </main>
        @endif

        {{ $slot }}
        <x-layouts.default.footer />
        @livewireScripts()
        @stack("scripts")
    </body>
</html>
