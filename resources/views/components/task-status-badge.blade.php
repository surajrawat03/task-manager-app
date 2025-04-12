@if($taskStatus === 'done')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
        Completed
    </span>
@elseif($taskStatus === 'inprogress')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
        In Progress
    </span>
@else
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
        To-Do
    </span>
@endif
