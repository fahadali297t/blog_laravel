<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            All Blogs
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- From Uiverse.io by mRcOol7 -->


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('blog.new.form') }}" class="text-white mb-2 block ms-2">Add new Blog &nbsp; <i
                    class="fa-solid fa-arrow-right"></i></a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse ($blogs as $blog)
                        <h1 class="text-lg">
                            {{ $blog->title }}
                        </h1>
                        <p class="mt-4">
                            {{ $blog->content }}
                        </p>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
