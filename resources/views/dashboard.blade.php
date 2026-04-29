<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Stats Header -->
        <div class="mb-6">
                <div class="relative">
                    <input type="text" 
                           placeholder="Search by title, author, or genre..." 
                           class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 shadow-sm dark:bg-gray-700 dark:border-gray-600 focus:ring-indigo-500">
                    <div class="absolute left-3 top-3.5 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                <p class="text-sm font-medium text-gray-500 uppercase">Total Books</p>
                <p class="text-3xl font-bold text-indigo-600">24</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                <p class="text-sm font-medium text-gray-500 uppercase">Currently Reading</p>
                <p class="text-3xl font-bold text-green-500">3</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                <p class="text-sm font-medium text-gray-500 uppercase">2026 Goal</p>
                <p class="text-3xl font-bold text-orange-500">15/50</p>
            </div>
        </div>

        <!-- Book Grid -->
        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Recent Additions</h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Example Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">
                <img src="https://via.placeholder.com/300x400" alt="Book Cover" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-bold text-gray-900 dark:text-white truncate">The Great Gatsby</h4>
                    <p class="text-sm text-gray-500 mb-2">F. Scott Fitzgerald</p>
                    <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">Completed</span>
                </div>
            </div>
            <!-- Duplicate the card div above for more books -->
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Total Books Card -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-200 dark:border-gray-700 p-6">
        <div class="flex items-center">
            <div class="p-3 bg-brand/10 rounded-full text-brand">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Total Books</p>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">42</h3>
            </div>
        </div>
    </div>

    <!-- Goal Progress Card -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-200 dark:border-gray-700 p-6">
        <div class="flex items-center">
            <div class="p-3 bg-accent/10 rounded-full text-accent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="ml-4 w-full">
                <p class="text-sm font-medium text-gray-500">2026 Goal</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                    <div class="bg-accent h-2.5 rounded-full" style="width: 45%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</x-app-layout>