<header>
    
    @include('components.social')

    <a href="#" class="menu fadeInLeft animated menu-select">
        <img class="svg" src="/img/svg/menu.svg" alt="menu">
    </a>

    <div class="menu fadeInLeft animated menu-block">
        <div class="close-block"></div>
        <ul>
            
                <li data-menuanchor="page1" class="active">
                    <a href="/dashboard">Dashboard</a>
                </li>
            {{--@if(Auth::user()->hasRole('admin'))--}}
                <li data-menuanchor="page2">
                    <a href="/tracker">Tracker</a>
                </li>
            <li data-menuanchor="page3">
                <a href="/profile">Profile</a>
            </li>
            {{--@endif--}}
                <li data-menuanchor="page4">
                    <a href="/reports">Reports</a>
                </li>
                <li data-menuanchor="page5">
                    <a href="/wall">Wall</a>
                </li>
                <li data-menuanchor="page6">
                    <a href="/auth/logout">Logout</a>
                </li>
            {{--@if()--}}
                <li data-menuanchor="page7">
                    <a href="/auth/login">Login</a>
                </li>
            {{--@endif--}}
        </ul>
    </div>

</header>