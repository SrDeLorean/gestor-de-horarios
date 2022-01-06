<!-- Desktop sidebar -->
<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block">
    @if (Auth::user()->role === 'admin')
        @include('layouts._menusAdmin')
    @elseif (Auth::user()->role === 'attendant')
        @include('layouts._menusAttendant')
    @else
        @include('layouts._menusUser')
    @endif
</aside>
