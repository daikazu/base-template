@unless ($breadcrumbs->isEmpty())
    <nav class="container mx-auto">
        <ol class="flex flex-wrap rounded p-4 text-sm font-bold text-gray-800 dark:text-gray-300">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && ! $loop->last)
                    <li>
                        <a
                            href="{{ $breadcrumb->url }}"
                            class="text-blue-600 hover:text-blue-900 hover:underline focus:text-blue-900 focus:underline"
                        >
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li>
                        {{ $breadcrumb->title }}
                    </li>
                @endif

                @unless ($loop->last)
                    <li class="px-2 text-gray-500">/</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endunless
