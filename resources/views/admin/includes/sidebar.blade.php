    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            {{-- <li class="nav-item {{ request()->is('dashboard') ? 'active' : ' ' }}">
                <a class="nav-link " href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav --> --}}

            <li class="nav-item {{ request()->is('dashboard') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <i class="bi bi-person"></i><span>Dashboard</span>
                </a>
            </li><!-- End Pasient Nav -->

            <li class="nav-item {{ request()->is('pasien.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('pasien.index') }}">
                    <i class="bi bi-person"></i><span>Pasien</span>
                </a>
            </li><!-- End Pasient Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Dokter</span>
                </a>
            </li><!-- End Dokter Nav -->

            <li class="nav-item {{ request()->is('poli.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('poli.index') }}">
                    <i class="bi bi-person"></i><span>Poli</span>
                </a>
            </li><!-- End Pasient Nav -->
        </ul>

    </aside><!-- End Sidebar-->
