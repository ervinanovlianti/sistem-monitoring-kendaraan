<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <h2>{{ Auth::user()->hak_akses }} </h2>
    <ul class="nav">
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="fe fe-bell fe-16"></span>
                <span class="dot dot-md bg-success"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="{{ asset('template/./assets/avatars/face-1.jpg') }}" alt="..."
                        class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right m-0" aria-labelledby="navbarDropdownMenuLink">
                {{-- <a class="dropdown-item" href="#">Profile</a> --}}
                <a class="dropdown-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class=" dropdown-item" style="text-decoration: none">Logout</button>
                    </form>
                </a>
            </div>
        </li>
    </ul>
</nav>
