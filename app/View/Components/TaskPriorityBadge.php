<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TaskPriorityBadge extends Component
{
    /**
     * @var string
     */
    public $taskPriorities;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $taskPriorities = '')
    {
        $this->taskPriorities = $taskPriorities;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-priority-badge');
    }
}
