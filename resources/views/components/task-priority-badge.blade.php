

@if($taskPriorities === 'critical')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-orange-200 text-orange-800">
        ⏫⏫ Critical
    </span>
@elseif($taskPriorities === 'high')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
        ⏫ High
    </span>
@elseif($taskPriorities === 'medium')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
        = Medium
    </span>
@elseif($taskPriorities === 'low')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
        ⏬ Low
    </span>
@elseif($taskPriorities === 'lowest')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
        ⏬⏬ Lowest
    </span>
@elseif($taskPriorities === 'minor')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
        ⏬ Minor
    </span>
@elseif($taskPriorities === 'trivial')
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
        ⚬ Trivial
    </span>
@else
    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-200 text-gray-800">
        Unknown
    </span>
@endif
