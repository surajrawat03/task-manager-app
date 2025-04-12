<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskStatusBadge extends Component
{
    /**
     * string
     */
    public $taskStatus;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($taskStatus = '')
    {
        $this->taskStatus = $taskStatus;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-status-badge');
    }
}