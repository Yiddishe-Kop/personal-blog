@if ($paginator->hasPages())
    <ul class="flex justify-between max-w-xs mx-auto mt-16 font-bold text-gray-700 pagination list-reset">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span class="px-4 py-2 text-gray-400 bg-transparent border border-gray-800 rounded opacity-50 cursor-not-allowed button">@lang('pagination.previous')</span>
            </li>
        @else
            <li>
                <a class="px-4 py-2 bg-transparent border border-gray-800 rounded button opacity-85" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="px-4 py-2 bg-transparent border border-gray-800 rounded button opacity-85" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="disabled ">
                <span class="px-4 py-2 text-gray-400 bg-transparent border border-gray-800 rounded opacity-50 cursor-not-allowed button">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
