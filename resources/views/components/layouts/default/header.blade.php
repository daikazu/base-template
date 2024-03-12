<header
    class="relative box-border block w-full border-b border-gray-600 bg-gray-900 py-6 text-center leading-10 text-indigo-900 md:py-8"
>
    <div class="mx-auto w-full max-w-7xl px-6 text-center leading-10 md:px-8">
        <nav class="-mx-4 box-border flex flex-wrap items-center justify-between text-indigo-900">
            <div class="relative flex w-auto items-center px-4 leading-10 lg:flex-shrink-0 lg:flex-grow-0 lg:text-left">
                <a
                    href="#_"
                    class="box-border inline-block cursor-pointer bg-transparent text-left font-sans text-2xl font-bold text-white no-underline focus:no-underline"
                >
                    Base Template
                </a>
            </div>
            <x-nav.main />

            <div
                class="relative mt-2 flex items-center px-4 font-medium leading-10 md:mt-0 md:flex-shrink-0 md:flex-grow-0 md:text-right lg:flex-shrink-0 lg:flex-grow-0"
            >
                <a
                    href="#_"
                    class="mr-3 box-border inline-block h-10 cursor-pointer rounded-lg bg-gray-800 px-4 text-right text-gray-200 no-underline hover:text-white focus:no-underline md:mr-0 md:bg-transparent"
                    data-rounded="rounded-lg"
                >
                    Login
                </a>
                <a
                    href="#_"
                    class="focus:shadow-xs box-border inline-flex h-10 cursor-pointer select-none items-center rounded-lg bg-gray-800 px-4 text-center align-middle text-base text-gray-100 no-underline hover:bg-gray-50 hover:text-gray-900 focus:no-underline"
                    data-rounded="rounded-lg"
                >
                    Sign Up
                </a>
                <x-dark-mode-toggle
                    class="focus:shadow-xs box-border inline-flex h-10 cursor-pointer select-none items-center rounded-lg px-4 text-center align-middle text-base text-gray-100 no-underline focus:no-underline"
                />

                <x-nav.slide-out />
            </div>
        </nav>
    </div>
</header>
