@props(['sortBy', 'sortAsc', 'sortField'])

@if ($sortBy == $sortField)
    @if (!$sortAsc)
    <span class="w-4 h-4 ml-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"></path></svg>
    </span>
    @endif

    @if ($sortAsc)
    <span class="w-4 h-4">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path></svg>
    </span>
    @endif
@endif
