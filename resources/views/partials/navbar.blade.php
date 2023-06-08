<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">YRD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($activel == "Home") ? 'active' : '' }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($activel === "post") ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($activel === "category") ? 'active' : '' }}" href="/categories">Category</a>
                </li>
            </ul>
            <ul class = "navbar-nav ms-auto">
            @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi! {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><img src="https://img.icons8.com/external-kmg-design-flat-kmg-design/32/000000/external-dashboard-user-interface-kmg-design-flat-kmg-design.png"/> Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method ="post">
                                    @csrf
                                    <button type="submit" class = "dropdown-item"><img src="https://img.icons8.com/ios-filled/30/000000/logout-rounded-left.png"/> Logout</button>
                                </form>
                        </ul>
                    </li>
            @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($activel === "login") ? 'active' : '' }}" href="/login"><img src="https://img.icons8.com/color/38/000000/enter-2.png"/>Login</a>
                    </li>
            @endauth
            </ul>
        </div>
    </div>
</nav>
