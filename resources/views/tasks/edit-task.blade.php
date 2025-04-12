<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Task
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <div class="mb-4">
                        <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}"
                               class="form-input rounded-md shadow-sm mt-1 block w-full">
                        @error('title')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="mb-4">
                        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4"
                                  class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('description', $task->description) }}</textarea>
                        @error('description')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Priority --}}
                    <div class="mb-4">
                        <label for="priority" class="block font-medium text-sm text-gray-700">Priority</label>
                        <select name="priority" id="priority" class="form-select rounded-md shadow-sm mt-1 block w-full">
                            <option value="low" {{ $task->priority === 'low' ? 'selected' : '' }}>Low</option>
                            <option value="medium" {{ $task->priority === 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value="high" {{ $task->priority === 'high' ? 'selected' : '' }}>High</option>
                        </select>
                        @error('priority')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="mb-4">
                        <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                        <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full">
                            <option value="todo" {{ $task->status === 'todo' ? 'selected' : '' }}>To Do</option>
                            <option value="in_progress" {{ $task->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="done" {{ $task->status === 'done' ? 'selected' : '' }}>Done</option>
                        </select>
                        @error('status')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="flex justify-end">
                        <a href="{{ route('tasks.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md mr-2">Cancel</a>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Update Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
