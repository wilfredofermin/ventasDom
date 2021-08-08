<header class="header navbar fixed-top navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>

    <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
        @include('layouts.theme.message-dropdown')

        @include('layouts.theme.notification-dropdown')

    </ul>

    <ul class="navbar-nav flex-row ml-lg-auto">
        @include('layouts.theme.search')

        @include('layouts.theme.app-dropdown')

        @include('layouts.theme.user-profile-dropdown')

        <!-- @include('layouts.theme.cs-toggle') -->

    </ul>

</header>