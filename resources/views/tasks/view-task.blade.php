<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <!-- Header -->
            <div class="bg-indigo-600 px-4 py-5 sm:px-6">
                <h3 class="text-2xl leading-6 font-bold text-white">Task Details</h3>
            </div>

            <!-- Details Section -->
            <div class="border-t border-gray-200">
                <dl>
                    <!-- Title -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50">
                        <dt class="text-sm font-medium text-gray-500">Title</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $task->title }}
                        </dd>
                    </div>

                    <!-- Description -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Description</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $task->description }}
                        </dd>
                    </div>

                    <!-- Status -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                            <x-task-status-badge :task-status="$task->status" />
                        </dd>
                    </div>

                    <!-- Priority -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Priority</dt>
                        <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                            <x-task-priority-badge :task-priorities="$task->priority" />
                        </dd>
                    </div>

                    <!-- Assigned User -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50">
                        <dt class="text-sm font-medium text-gray-500">Assigned To</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @if($task->user)
                                <div class="text-sm font-medium text-gray-900">{{ $task->user->name }}</div>
                                <div class="text-sm text-gray-500">{{ $task->user->email }}</div>
                            @else
                                <span class="text-sm text-gray-500">Unassigned</span>
                            @endif
                        </dd>
                    </div>
                </dl>
            </div>

            <!-- Action Buttons (Edit and Back to List inline) -->
            <div class="border-t border-gray-200 px-4 py-4 sm:px-6">
                <div class="inline-flex items-center space-x-3">
                    <a href="{{ route('tasks.edit', $task) }}"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Edit Task
                    </a>
                    <a href="{{ route('tasks.index') }}"
                       class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>