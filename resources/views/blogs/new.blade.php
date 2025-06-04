<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add New Blog
        </h2>
    </x-slot>




    <div class="py-12">
        @forelse ($errors->all() as $error)
            <div class="custom_alert" id="custom-alert"
                class="flex items-center justify-between mb-4 text-red-100 border border-red-400 rounded-lg bg-red-600 dark:bg-red-800 dark:text-red-100 dark:border-red-700">
                <div class="flex items-center">

                    <span class="text-sm">
                        {{ $error }}
                    </span>
                    &nbsp;
                    <button onclick="document.getElementById('custom-alert').remove()"
                        class="ml-4 text-red-100 hover:text-white rounded focus:outline-none focus:ring-2 focus:ring-red-400 p-1.5 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l12 12M13 1L1 13" />
                        </svg>
                    </button>
                </div>

            </div>
        @empty
        @endforelse



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('blog.new.submit') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="flex flex-col justify-center align-middle gap-3">
                            <div>
                                <label for="title" class="block mb-2 text-md">
                                    Title:
                                </label>
                                <input type="text" id="title" name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </div>
                            <div>
                                <label for="content" class="block mb-2 text-md">
                                    Content:
                                </label>
                                <textarea id="message" rows="24" name="content"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Your Blog Content"></textarea>
                            </div>
                            <div>

                                <label for="category" class="block mb-2 text-md">Category:</label>
                                <select id="category" name="category"
                                    class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    @forelse ($cat as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                    @endforelse

                                </select>


                            </div>
                            <div>
                                <label for="countries" class="block mb-2 text-md">Cover Image:</label>

                                <input
                                    class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-900 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="user_avatar" type="file" name="image_path">

                            </div>
                            <div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
