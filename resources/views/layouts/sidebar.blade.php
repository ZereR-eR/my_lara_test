<div class="sidebar min-vh-100  " >
    <ul>
        <li class="my-3">
            <a href="{{ route('home') }}" >
                <img src="{{ asset('images/logos/logo.png') }}" class="brand-logo" height="50" alt="">
            </a>
        </li>
        <li class="sidebar-spacer"></li>
        <li>
            <x-side-bar-menu name="Home" icon="fa fa-home" route="home"></x-side-bar-menu>
        </li>
        <li>
            <x-side-bar-menu name="Test" icon="fas fa-envelope" route="test"></x-side-bar-menu>
        </li>
        <li class="sidebar-spacer"></li>

        <li>
            <p class="sidebar-group-title">Manage Profile</p>
        </li>
        <li>
            <x-side-bar-menu name="Change Password" icon="fas fa-user" route="profile.change-password"></x-side-bar-menu>
        </li>


        <li>
            <a href="#" class="sidebar-link" onclick="document.getElementById('logoutForm').submit()">
                <i class="fas fa-power-off fa-fw sidebar-link-icon"></i>
                Logout
            </a>
        </li>
        <li class="sidebar-spacer"></li>

    </ul>
</div>
