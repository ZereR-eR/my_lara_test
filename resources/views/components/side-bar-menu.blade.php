<a href="{{ route($route) }}" class="sidebar-link {{ request()->url() == route($route) ? 'active' : '' }}">
    <i class="{{$icon}} fa-fw sidebar-link-icon"></i>
    {{ $name }}
</a>
