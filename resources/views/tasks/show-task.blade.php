<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 text-sm text-green-600 bg-green-100 border border-green-300 rounded-md p-6">
                    {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <!-- Filters Section -->
                <div class="p-6 border-b border-gray-200 bg-gray-50">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Filter Tasks</h3>
                    </div>
                    <form action="{{ route('tasks.index') }}" method="GET" class="space-y-4">
                        <!-- Filters Row -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                                <input type="text"
                                    class="shadow appearance-none border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="title" id="title" value="{{ request('title') ?? ''}}">
                            </div>
                            <!-- Status Filter -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                    <option value="">All Statuses</option>
                                    <option value="todo" {{ request('status') == 'todo' ? 'selected' : '' }}>To-Do</option>
                                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                    
                            <!-- Priority Filter -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                                <select name="priority" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                    <option value="">All Priorities</option>
                                    <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
                                    <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Team Filter -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Team</label>
                                <select name="team" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                                    <option value="">All Teams</option>
                                    <option value="todo" {{ request('team') == 'todo' ? 'selected' : '' }}>To-Do</option>
                                    <option value="in_progress" {{ request('team') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="completed" {{ request('team') == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-4">
                            <button type="submit" 
                                    class="w-full md:w-auto inline-flex justify-center items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Filter
                            </button>
                            <a href="{{ route('tasks.index') }}" 
                                class="w-full md:w-auto inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Reset
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Table Section -->
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-gray-900">Task List</h2>
                        <a href="{{ route('tasks.create') }}" 
                           class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring-2 focus:ring-indigo-300 disabled:opacity-25 transition">
                            Add New Task
                        </a>
                    </div>

                    <div class="overflow-x-auto rounded-lg border border-gray-200 w-full">
                        <table class="min-w-full w-full divide-y divide-gray-200 table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assigned To</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($tasks as $key => $task)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-normal">{{ ++$key }}</td>
                                    <td class="px-4 py-4 whitespace-normal">
                                        <div class="text-sm font-semibold text-gray-900">{{ $task->title }}</div>
                                        <div class="text-sm text-gray-500 mt-1">{{ Str::limit($task->description, 50) }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-normal">
                                        <x-task-status-badge :task-status="$task->status" />
                                    </td>
                                    <td class="px-4 py-4 whitespace-normal">
                                        <x-task-priority-badge :task-priorities="$task->priority" />
                                    </td>
                                    <td class="px-4 py-4 whitespace-normal">
                                        <div class="flex items-center">
                                            @if($task->user_id)
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $task->user->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $task->user->email }}</div>
                                            </div>
                                            @else
                                            <span class="text-sm text-gray-500">Unassigned</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-normal text-sm font-medium">
                                        <a href="{{ route('tasks.show', $task) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                                        <a href="{{ route('tasks.edit', $task) }}" class="text-yellow-600 hover:text-yellow-900 mr-3">Edit</a>
                                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                        No tasks found. <a href="{{ route('tasks.create') }}" class="text-indigo-600 hover:underline">Create a new task</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
