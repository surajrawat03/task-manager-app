<div class="col-span-6 grid grid-cols-6 gap-4">
    <!-- Team Dropdown -->
    <div class="col-span-6">
        <label for="team_id" class="block text-sm font-medium text-gray-700">Team</label>
        <select 
            wire:model="selectedTeam"
            id="team_id" 
            name="team_id"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        >
            <option value="">Select Team</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Assignee Dropdown -->
    <div class="col-span-6">
        <label for="assignee_id" class="block text-sm font-medium text-gray-700">Assignee</label>
        <select 
            id="assignee_id" 
            name="user_id"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            {{ !$selectedTeam ? 'disabled' : '' }}
        >
            <option value="">Select Assignee</option>
            @foreach($teamMembers as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
</div>