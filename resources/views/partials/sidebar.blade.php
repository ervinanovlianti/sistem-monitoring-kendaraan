<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        {{-- @if (Auth::user()->hak_akses == 'admin') --}}
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100 " aria-expanded="false" class="dropdown-toggle nav-link">
                <a class="nav-link" href="{{ route('dashboard-admin') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span></span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('pesanan.index') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Pemesanan</span>
                </a>
            </li>
        </ul>
        {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#data" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-book fe-16"></i>
                        <span class="ml-3 item-text">Data</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="data">
                        <a class="nav-link pl-3" href="{{ Route('kendaraan.index') }}"><span
                                class="ml-1">Kendaraan</span></a>
                        <a class="nav-link pl-3" href="{{ Route('pegawai.index') }}"><span
                                class="ml-1">Pegawai</span></a>
                        <a class="nav-link pl-3" href="{{ Route('data.index') }}"><span
                                class="ml-1">Perusahaan</span></a>
                    </ul>
                </li>
            </ul> --}}
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('kendaraan.index') }}">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Kendaraan</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('pegawai.index') }}">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Pegawai</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('pegawai.index') }}">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Laporan</span>
                </a>
            </li>
        </ul>

        {{-- @elseif (Auth::user()->hak_akses == 'atasan') --}}
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100 " aria-expanded="false" class="dropdown-toggle nav-link">
                <a class="nav-link" href="{{ Route('dashboard') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span></span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('pesanan.action') }}">
                    <i class="fe fe-check-square fe-16"></i>
                    <span class="ml-3 item-text">Pesanan</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="/monitoring">
                    <i class="fe fe-activity fe-16"></i>
                    <span class="ml-3 item-text">Monitoring</span>
                </a>
            </li>
        </ul>

        {{-- @endif --}}

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ Route('profil') }}">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profil</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
