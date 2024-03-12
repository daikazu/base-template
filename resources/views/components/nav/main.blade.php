<nav
    x-data="{
        navigationMenuOpen: false,
        navigationMenu: '',
        navigationMenuCloseDelay: 200,
        navigationMenuCloseTimeout: null,
        navigationMenuLeave() {
            let that = this
            this.navigationMenuCloseTimeout = setTimeout(() => {
                that.navigationMenuClose()
            }, this.navigationMenuCloseDelay)
        },
        navigationMenuReposition(navElement) {
            this.navigationMenuClearCloseTimeout()
            this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px'
            this.$refs.navigationDropdown.style.marginLeft =
                navElement.offsetWidth / 2 + 'px'
        },
        navigationMenuClearCloseTimeout() {
            clearTimeout(this.navigationMenuCloseTimeout)
        },
        navigationMenuClose() {
            this.navigationMenuOpen = false
            this.navigationMenu = ''
        },
    }"
    class="relative z-10 w-auto"
>
    <div class="relative">
        <ul class="group flex flex-1 list-none items-center justify-center space-x-1 p-1 text-neutral-200">
            <li>
                <button
                    :class="{
                        'bg-neutral-100': navigationMenu == 'getting-started',
                        'hover:bg-neutral-100': navigationMenu !=
                            'getting-started'
                    }"
                    @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='getting-started'"
                    @mouseleave="navigationMenuLeave()"
                    class="group inline-flex h-10 w-max items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition-colors hover:text-neutral-900 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                >
                    <span>Getting started</span>
                    <svg
                        :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'getting-started' }"
                        class="relative top-[1px] ml-1 h-3 w-3 duration-300 ease-out"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            <li>
                <button
                    :class="{
                        'bg-neutral-100': navigationMenu == 'learn-more',
                        'hover:bg-neutral-100': navigationMenu !=
                            'learn-more'
                    }"
                    @mouseover="navigationMenuOpen=true; navigationMenuReposition($el); navigationMenu='learn-more'"
                    @mouseleave="navigationMenuLeave()"
                    class="bg-background group inline-flex h-10 w-max items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition-colors hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                >
                    <span>Learn More</span>
                    <svg
                        :class="{ '-rotate-180': navigationMenuOpen == true && navigationMenu == 'learn-more' }"
                        class="relative top-[1px] ml-1 h-3 w-3 duration-300 ease-out"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </li>
            <li>
                <a
                    href="#_"
                    class="bg-background group inline-flex h-10 w-max items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition-colors hover:bg-neutral-100 hover:text-neutral-900 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                >
                    Documentation
                </a>
            </li>
        </ul>
    </div>
    <div
        x-ref="navigationDropdown"
        x-show="navigationMenuOpen"
        x-transition:enter="transition duration-100 ease-out"
        x-transition:enter-start="scale-90 opacity-0"
        x-transition:enter-end="scale-100 opacity-100"
        x-transition:leave="transition duration-100 ease-in"
        x-transition:leave-start="scale-100 opacity-100"
        x-transition:leave-end="scale-90 opacity-0"
        @mouseover="navigationMenuClearCloseTimeout()"
        @mouseleave="navigationMenuLeave()"
        class="absolute top-0 -translate-x-1/2 translate-y-11 pt-3 duration-200 ease-out"
        x-cloak
    >
        <div
            class="flex h-auto w-auto justify-center overflow-hidden rounded-md border border-neutral-200/70 bg-white shadow-sm"
        >
            <div
                x-show="navigationMenu == 'getting-started'"
                class="flex w-full max-w-2xl items-stretch justify-center gap-x-3 p-6"
            >
                <div class="w-48 flex-shrink-0 rounded bg-gradient-to-br from-neutral-800 to-black pb-7 pt-28">
                    <div class="relative space-y-1.5 px-7 text-white">
                        <svg
                            class="block h-9 w-auto"
                            viewBox="0 0 180 180"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M67.683 89.217h44.634l30.9 53.218H36.783l30.9-53.218Z"
                                fill="currentColor"
                            />
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M77.478 120.522h21.913v46.956H77.478v-46.956Zm-34.434-29.74 45.59-78.26 46.757 78.26H43.044Z"
                                fill="currentColor"
                            />
                        </svg>
                        <span class="block font-bold">Pines UI</span>
                        <span class="block text-sm opacity-60">An Alpine and Tailwind UI library</span>
                    </div>
                </div>
                <div class="w-72">
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Introduction</span>
                        <span class="block font-light leading-5 opacity-50">
                            Re-usable elements built using Alpine JS and Tailwind CSS.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">How to use</span>
                        <span class="block leading-5 opacity-50">
                            Couldn't be easier. It's is as simple as copy, paste, and preview.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Contributing</span>
                        <span class="block leading-5 opacity-50">
                            Feel free to contribute your expertise. All these elements are open-source.
                        </span>
                    </a>
                </div>
            </div>
            <div x-show="navigationMenu == 'learn-more'" class="flex w-full items-stretch justify-center p-6">
                <div class="w-72">
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Tailwind CSS</span>
                        <span class="block font-light leading-5 opacity-50">
                            A utility first CSS framework for building amazing websites.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Laravel</span>
                        <span class="block font-light leading-5 opacity-50">
                            The perfect all-in-one framework for building amazing apps.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Pines UI</span>
                        <span class="block leading-5 opacity-50">
                            An Alpine JS and Tailwind CSS UI library for awesome people.
                        </span>
                    </a>
                </div>
                <div class="w-72">
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">ApineJS</span>
                        <span class="block font-light leading-5 opacity-50">
                            A framework without the complex setup or heavy dependencies.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Livewire</span>
                        <span class="block leading-5 opacity-50">
                            A seamless integration of server-side and client-side interactions.
                        </span>
                    </a>
                    <a
                        href="#_"
                        @click="navigationMenuClose()"
                        class="block rounded px-3.5 py-3 text-sm hover:bg-neutral-100"
                    >
                        <span class="mb-1 block font-medium text-black">Tails</span>
                        <span class="block leading-5 opacity-50">
                            The ultimate Tailwind CSS design tool that helps you craft beautiful websites.
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
