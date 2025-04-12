<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;

class TeamUserDropdown extends Component
{
    public $selectedTeam;
    public $teamMembers = [];
    public $selectedAssignee;

    public function updatedSelectedTeam($teamId)
    {
        if ($teamId) {
            $this->teamMembers = Team::find($teamId)->allUsers();
        } else {
            $this->teamMembers = [];
        }
        $this->selectedAssignee = null; // Reset assignee when team changes
    }

    public function render()
    {
        return view('livewire.team-user-dropdown', [
            'teams' => auth()->user()->allTeams()
        ]);
    }
}