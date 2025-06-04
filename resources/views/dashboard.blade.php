<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">



        @forelse ($blogs as $blog)
            <div class="card">
                <h1>
                    {{ $blog->title }}
                </h1>
                <p>
                    {{ $blog->content }}
                </p>
            </div>
        @empty
        @endforelse
    </div>
</x-app-layout>
