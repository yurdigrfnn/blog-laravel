<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''  }} " href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*')  ? 'active' : ' ' }} " href="/dashboard/posts">
                    <img src="https://img.icons8.com/small/20/000000/activity-history.png"/>
                    Postingan Saya
                </a>
            </li>
        </ul>
    </div>
</nav>
