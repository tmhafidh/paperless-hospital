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
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="3">
                    <i class="bi bi-person"></i><span>Pemeriksaan Pasien</span>
                </a>
            </li><!-- End Pasient Nav -->

            <li class="nav-item {{ request()->is('pasien.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('pasien.index') }}">
                    <i class="bi bi-person"></i><span>Pasien</span>
                </a>
            </li><!-- End Pasient Nav -->
            <li class="nav-item {{ request()->is('poli.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('poli.index') }}">
                    <i class="bi bi-person"></i><span>Poli</span>
                </a>
            </li><!-- End Pasient Nav -->
            <li class="nav-item {{ request()->is('registrasi.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('registrasi.index') }}">
                    <i class="bi bi-person"></i><span>Registrasi Pasien</span>
                </a>
            </li><!-- End Pasient Nav -->
            <li class="nav-item {{ request()->is('dokter.index') ? 'active' : ' ' }}">
                <a class="nav-link collapsed" href="{{ route('dokter.index') }}">
                    <i class="bi bi-person"></i><span>Dokter</span>
                </a>
            </li><!-- End Pasient Nav -->

        </ul>

    </aside><!-- End Sidebar-->
