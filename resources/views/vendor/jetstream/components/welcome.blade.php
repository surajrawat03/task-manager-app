<div class="p-6 sm:px-20">
    <!-- Application Logo -->
    {{-- <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div> --}}

    <!-- Welcome Message -->
    <div class="mt-0 text-2xl">
        Welcome back! Let's get things done.
    </div>
    <div class="mt-4 text-gray-500">
        Your task manager dashboard provides an overview of your tasks, recent activity, and tools to stay productive.
    </div>
</div>

<!-- Task Overview Section -->
<div class="bg-opacity-25 grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
    <!-- Pending Tasks -->
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Pending Tasks</div>
        </div>
        <div class="ml-12 mt-4 text-3xl font-bold text-gray-800">
            5 <!-- Replace with dynamic data -->
        </div>
    </div>

    <!-- Completed Tasks -->
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Completed Tasks</div>
        </div>
        <div class="ml-12 mt-4 text-3xl font-bold text-gray-800">
            12 <!-- Replace with dynamic data -->
        </div>
    </div>

    <!-- Overdue Tasks -->
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-red-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Overdue Tasks</div>
        </div>
        <div class="ml-12 mt-4 text-3xl font-bold text-gray-800">
            2 <!-- Replace with dynamic data -->
        </div>
    </div>
</div>

<!-- Recent Tasks Section -->
<div class="bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 p-6">
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="border-gray-200">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 000 4h2a2 2 0 000-4M9 9a2 2 0 012-2h2a2 2 0 012 2m-6 4h6" />
                </svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Recent Tasks</div>
            </div>
            <div class="ml-12 mt-4">
                <ul class="space-y-2">
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700">Finish project proposal</span>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                            Completed
                        </span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700">Prepare presentation slides</span>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-yellow-600 bg-yellow-200">
                            Pending
                        </span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700">Review team feedback</span>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">
                            Overdue
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Additional Resources Section -->
<div class="bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Documentation</a></div>
        </div>
        <div class="ml-12 mt-2 text-sm text-gray-500">
            Learn more about Laravel and its features in the official documentation.
        </div>
    </div>
    <div class="p-6 bg-white shadow rounded-lg">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Settings</div>
        </div>
        <div class="ml-12 mt-2 text-sm text-gray-500">
            Customize your task manager preferences and account settings.
        </div>
    </div>
</div>