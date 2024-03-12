@seoTitle("THIS IS THE PAGE TITLE")
@seoDescription("THIS IS THE HOME PAGE META DESCRIPTION")
@seoRobots("index,follow")

<x-layouts.default>
    <x-slot:main>
        <section class="flex w-full flex-col overflow-hidden bg-white sm:mx-auto lg:flex-row">
            <div class="flex justify-end bg-white p-8 lg:w-1/2 lg:px-16 lg:py-32 lg:pl-10">
                <div class="flex w-full flex-col items-start justify-center lg:max-w-lg">
                    <p
                        class="mb-5 inline-block rounded-full bg-gray-200 px-2 py-1 text-xs font-medium uppercase tracking-wider text-gray-900"
                    >
                        Craft and build your website
                    </p>
                    <h5 class="mb-3 text-3xl font-extrabold leading-none text-gray-900 sm:text-4xl lg:text-7xl">
                        Building The Foundation
                    </h5>
                    <p class="mb-5 py-5 text-gray-600 lg:text-xl">
                        <span class="font-bold">Our Platform</span>
                        will help you craft and build your next idea. Utilize our drag and drop components to build the
                        application of your dreams.
                    </p>
                    <div class="flex items-center">
                        <button
                            type="submit"
                            class="focus:shadow-outline mr-6 inline-flex h-12 items-center justify-center rounded-lg bg-gray-900 px-6 font-medium tracking-wide text-white transition duration-200 hover:bg-gray-900 focus:outline-none"
                            data-rounded="rounded-lg"
                            data-primary="gray-900"
                        >
                            Get started
                        </button>
                        <a
                            href="/"
                            aria-label=""
                            class="inline-flex items-center text-lg text-gray-900 underline transition-colors duration-200"
                            data-primary="gray-900"
                        >
                            Learn More
                            <svg class="ml-2 inline-block w-2" fill="currentColor" viewBox="0 0 12 12">
                                <path
                                    d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative lg:w-1/2">
                <img
                    src="https://images.unsplash.com/photo-1578554700872-ef0e27c46d37?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2934&q=80"
                    alt="Hero Image"
                    class="h-80 w-full object-cover lg:absolute lg:h-full"
                />
            </div>
        </section>

        <x-breadcrumbs />

        <section class="bg-white pb-32 pt-20">
            <div class="mx-auto max-w-7xl px-20">
                <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">Features</h2>
                <p class="mb-16 text-lg text-gray-500">Here is our list of our powerful and award-winning features.</p>
                <div class="grid grid-cols-1 gap-x-16 gap-y-20 sm:grid-cols-2 md:grid-cols-3 lg:gap-x-24">
                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600"
                            data-primary="red-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-8 w-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Processing</h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Faster processing to help you build your applications quicker and with more efficiency.
                        </p>
                    </div>

                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600"
                            data-primary="green-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-8 w-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                ></path>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">
                            Configuration
                        </h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Faster processing to help you build your applications quicker and with more efficiency.
                        </p>
                    </div>

                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-100 text-blue-600"
                            data-primary="blue-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-8 w-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Bundling</h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Bundling functionality to help you build your application with ease and sustainability.
                        </p>
                    </div>

                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-100 text-purple-600"
                            data-primary="purple-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-8 w-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Database</h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Take advantage of unlimited storage and data retrieval from our global CDN data centers.
                        </p>
                    </div>

                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100 text-indigo-600"
                            data-primary="indigo-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">
                            Integrations
                        </h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Simple and configuration intregrations with your favorite applications and services.
                        </p>
                    </div>

                    <div>
                        <div
                            class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-pink-100 text-pink-600"
                            data-primary="pink-600"
                            data-rounded="rounded-full"
                        >
                            <svg
                                class="h-8 w-8"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                ></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-semibold leading-tight text-gray-900 lg:text-lg">Speed</h3>
                        <p class="text-sm text-gray-500 lg:text-base">
                            Our tools and services have been crafted for maximum speed and efficiency.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-gray-50 py-20">
            <div class="mx-auto max-w-7xl px-10">
                <div class="mb-8 space-y-5 px-10 lg:mb-16 lg:px-0 lg:text-center">
                    <h2 class="text-4xl font-bold sm:text-5xl">Powerful Design Templates</h2>
                    <p class="w-ful text-lg text-gray-600 sm:text-xl">
                        The most powerful and customizable design templates to help you tell your story.
                    </p>
                </div>
                <div class="grid overflow-hidden lg:rounded-xl">
                    <div class="grid items-center lg:grid-cols-2">
                        <div
                            class="flex h-full flex-col items-start justify-center space-y-4 bg-white py-16 pl-16 pr-16 lg:py-0 lg:pr-20"
                        >
                            <h3 class="text-2xl font-semibold sm:text-4xl">Expertly Crafted</h3>
                            <p class="text-lg text-gray-600">
                                A beautiful drag and drop interface that allows you to create the landing page of your
                                dreams. Our templates are designed for maximum conversion and the best user experience.
                            </p>
                        </div>
                        <div class="h-96 overflow-hidden bg-gray-100">
                            <img
                                src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3270&q=80"
                                class="h-full w-full object-cover"
                                alt=""
                            />
                        </div>
                    </div>

                    <div class="grid items-center lg:grid-cols-2">
                        <div class="order-last h-96 overflow-hidden bg-gray-100 lg:order-first">
                            <img
                                src="https://images.unsplash.com/photo-1541506618330-7c369fc759b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1665&q=80"
                                class="h-full w-full object-cover"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex h-full flex-col items-start justify-center space-y-4 bg-white py-16 pl-16 pr-16 lg:py-0 lg:pr-20"
                        >
                            <h3 class="text-2xl font-semibold sm:text-4xl">Magnificent Designs</h3>
                            <p class="text-left text-lg text-gray-600">
                                Delight your users with the most intuitive and easy to follow designs that will help you
                                convert those visitors into paying customers.
                            </p>
                        </div>
                    </div>

                    <div class="grid items-center lg:grid-cols-2">
                        <div
                            class="flex h-full flex-col items-start justify-center space-y-4 bg-white py-16 pl-16 pr-16 lg:py-0 lg:pr-20"
                        >
                            <h3 class="text-2xl font-semibold sm:text-4xl">Easily Customizable</h3>
                            <p class="text-lg text-gray-600">
                                All our templates are easy to customize and make your own. It has never been easier to
                                integrate beautiful designs into your web applications.
                            </p>
                        </div>
                        <div class="h-96 bg-gray-100">
                            <img
                                src="https://images.unsplash.com/photo-1416339442236-8ceb164046f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3203&q=80"
                                class="h-full w-full object-cover"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div id="app" class="flex flex-1 flex-col items-center justify-center"> --}}
        {{-- <h1 class="text-6xl font-black italic">Hello, cruel world.</h1> --}}
        {{-- <div class="container prose mt-6 max-w-4xl text-gray-800"> --}}
        {{-- @include('tables.pricing') --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </x-slot>

    <section
        class="flex w-full items-center justify-center border-t border-gray-200 bg-white px-8 py-10 md:py-16 lg:py-20 xl:px-0"
    >
        <div class="mx-auto max-w-6xl">
            <div class="flex-col items-center">
                <div class="mx-auto flex h-full w-full max-w-2xl flex-col items-center justify-center pr-8 text-center">
                    <p
                        class="mb-5 text-sm font-medium uppercase tracking-tight text-indigo-500 sm:text-base"
                        data-primary="indigo-500"
                    >
                        Our customers love our product
                    </p>
                    <h2
                        class="text-5xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none md:text-6xl"
                    >
                        Testimonials
                    </h2>
                    <p class="my-6 text-xl font-medium text-gray-500">
                        Don't just take our word for it, read from our extensive list of case studies and customer
                        testimonials.
                    </p>
                </div>
                <div class="mx-auto flex max-w-2xl flex-col items-center justify-center py-8 xl:max-w-full xl:flex-row">
                    <div class="w-full xl:w-1/2 xl:pr-8">
                        <blockquote
                            class="ease col-span-1 flex w-full flex-col-reverse items-center justify-between rounded-lg bg-gray-100 p-6 text-center transition-all duration-200 hover:shadow md:flex-row md:text-left"
                            data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"
                        >
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg
                                        class="absolute left-0 h-10 w-10 fill-current text-indigo-500"
                                        data-primary="indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 125"
                                    >
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"
                                        ></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">
                                        I'm loving these templates! Very nice features and layouts.
                                    </p>
                                </div>

                                <h3 class="mt-3 truncate pl-12 text-base font-medium leading-5 text-gray-800">
                                    Sandra Walton
                                    <span class="mt-1 truncate text-sm leading-5 text-gray-500">- CEO SomeCompany</span>
                                </h3>
                                <p class="mt-1 truncate text-sm leading-5 text-gray-500"></p>
                            </div>
                            <img
                                class="mb-5 h-24 w-24 flex-shrink-0 rounded-full bg-gray-300 object-cover md:mb-0"
                                src="https://cdn.devdojo.com/tails/avatars/089.jpg"
                                alt=""
                            />
                        </blockquote>
                        <blockquote
                            class="ease col-span-1 mb-16 mt-16 flex w-full flex-col-reverse items-center justify-between rounded-lg bg-gray-100 p-6 text-center transition-all duration-200 hover:shadow md:flex-row md:text-left xl:mb-0"
                            data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"
                        >
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg
                                        class="absolute left-0 h-10 w-10 fill-current text-indigo-500"
                                        data-primary="indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 125"
                                    >
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"
                                        ></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">
                                        Really digging this service. Now I can quickly bootstrap any project.
                                    </p>
                                </div>
                                <h3 class="mt-3 truncate pl-12 text-base font-medium leading-5 text-gray-800">
                                    Kenny Jones
                                    <span class="mt-1 truncate text-sm leading-5 text-gray-500">- CEO SomeCompany</span>
                                </h3>
                                <p class="mt-1 truncate text-sm leading-5 text-gray-500"></p>
                            </div>
                            <img
                                class="mb-5 h-24 w-24 flex-shrink-0 rounded-full bg-gray-300 object-cover md:mb-0"
                                src="https://cdn.devdojo.com/tails/avatars/067.jpg"
                                alt=""
                            />
                        </blockquote>
                    </div>
                    <div class="w-full xl:w-1/2 xl:pl-8">
                        <blockquote
                            class="ease col-span-1 flex w-full flex-col-reverse items-center justify-between rounded-lg bg-gray-100 p-6 text-center transition-all duration-200 hover:shadow md:flex-row md:text-left"
                            data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"
                        >
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg
                                        class="absolute left-0 h-10 w-10 fill-current text-indigo-500"
                                        data-primary="indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 125"
                                    >
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"
                                        ></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">
                                        Extremely helpful in every single project we have released.
                                    </p>
                                </div>

                                <h3 class="mt-3 truncate pl-12 text-base font-medium leading-5 text-gray-800">
                                    Mike Smith
                                    <span class="mt-1 truncate text-sm leading-5 text-gray-500">- CEO SomeCompany</span>
                                </h3>
                                <p class="mt-1 truncate text-sm leading-5 text-gray-500"></p>
                            </div>
                            <img
                                class="mb-5 h-24 w-24 flex-shrink-0 rounded-full bg-gray-300 object-cover md:mb-0"
                                src="https://cdn.devdojo.com/tails/avatars/101.jpg"
                                alt=""
                            />
                        </blockquote>
                        <blockquote
                            class="ease col-span-1 mt-16 flex w-full flex-col-reverse items-center justify-between rounded-lg bg-gray-100 p-6 text-center transition-all duration-200 hover:shadow md:flex-row md:text-left"
                            data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"
                        >
                            <div class="flex flex-col pr-10">
                                <div class="relative pl-12">
                                    <svg
                                        class="absolute left-0 h-10 w-10 fill-current text-indigo-500"
                                        data-primary="indigo-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 125"
                                    >
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"
                                        ></path>
                                    </svg>
                                    <p class="mt-2 text-base text-gray-600">
                                        Finally a quick and easy system I can use for any type of project.
                                    </p>
                                </div>

                                <h3 class="mt-3 truncate pl-12 text-base font-medium leading-5 text-gray-800">
                                    Molly Sanchez
                                    <span class="mt-1 truncate text-sm leading-5 text-gray-500">- CEO SomeCompany</span>
                                </h3>
                                <p class="mt-1 truncate text-sm leading-5 text-gray-500"></p>
                            </div>
                            <img
                                class="mb-5 h-24 w-24 flex-shrink-0 rounded-full bg-gray-300 object-cover md:mb-0"
                                src="https://cdn.devdojo.com/tails/avatars/009.jpg"
                                alt=""
                            />
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-8 py-8 sm:py-10 lg:py-20">
            <div
                class="md:bg-purple-1000 relative overflow-hidden rounded-lg bg-gradient-to-r from-pink-500 to-purple-500 py-6 md:px-6 md:shadow-xl lg:flex lg:items-center lg:justify-between lg:p-16 lg:py-12"
                data-primary="purple-600"
                data-rounded="rounded-lg"
                data-rounded-max="rounded-full"
            >
                <div
                    class="absolute right-0 top-0 -mt-20 hidden h-96 w-full translate-x-1/2 rotate-45 transform bg-white opacity-5 sm:block"
                ></div>
                <div
                    class="absolute left-0 top-0 -mt-20 hidden h-96 w-full -translate-x-1/2 rotate-45 transform bg-pink-300 opacity-5 sm:block"
                ></div>
                <div class="relative rounded-lg p-6 md:p-0 md:pb-4">
                    <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-white sm:text-2xl sm:leading-10">
                        Engage with your customers.
                    </h2>
                    <p class="mt-5 w-full text-base leading-6 text-pink-100 md:w-3/4" data-primary="pink-600">
                        Get started for free and start engaging with your visitors in order to turn them into paying
                        customers.
                    </p>
                </div>
                <div
                    class="relative flex w-full flex-col items-center space-y-5 px-6 md:w-auto md:flex-row md:space-x-5 md:space-y-0 md:px-0 lg:flex-shrink-0"
                >
                    <a
                        href="#_"
                        class="focus:shadow-outline block w-full rounded-md bg-purple-100 px-5 py-3 text-center text-base font-medium leading-6 text-purple-600 transition duration-150 ease-in-out hover:bg-white focus:outline-none md:inline-flex md:w-auto md:shadow"
                        data-primary="purple-600"
                        data-rounded="rounded-md"
                    >
                        See Pricing
                    </a>
                    <a href="#_" class="text-white">Try it free</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.default>
