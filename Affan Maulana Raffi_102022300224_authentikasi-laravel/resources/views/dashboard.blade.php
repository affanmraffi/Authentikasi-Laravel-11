<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h2 class="text-2xl font-semibold mt-6 mb-4">Posts</h2>
                    <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">ID</th>
                                <th class="px-4 py-2 border-b text-left">Title</th>
                                <th class="px-4 py-2 border-b text-left">Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $post->id }}</td>
                                    <td class="px-4 py-2 border-b">{{ $post->title }}</td>
                                    <td class="px-4 py-2 border-b">{{ $post->content }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
