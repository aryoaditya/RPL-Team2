<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if (auth()->user()->role == 'admin')
                    <li><a href="/mahasiswa" class=""><i class="lnr lnr-user"></i> <span>Mahasiswa</span></a></li>
                @endif
                <li><a href="/matakuliah" class=""><i class="lnr lnr-book"></i> <span>Mata Kuliah</span></a></li>
            </ul>
        </nav>
    </div>
</div>