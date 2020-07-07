<!-- Navbars -->
<nav id="topNav" class="navbar navbar-expand-lg topnav">
    <div class="container">
        <div class="navbar-toggler-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsetopnav" aria-controls="collapsetopnav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapsetopnav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="calonmhs" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Calon Mahasiswa</a>
                    <div class="dropdown-menu" aria-labelledby="calonmhs">
                        <a class="dropdown-item" href="#">Jurusan</a>
                        <a class="dropdown-item" href="#">Jalur Penerimaan</a>
                        <a class="dropdown-item" href="#">Tentang PENS</a>
                        <a class="dropdown-item" href="#">Kehidupan Mahasiswa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="mhs" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mahasiswa</a>
                    <div class="dropdown-menu" aria-labelledby="mhs">
                        <a class="dropdown-item" href="#">Online MIS</a>
                        <a class="dropdown-item" href="#">E-Learning</a>
                        <a class="dropdown-item" href="#">Kalender Akademik</a>
                        <a class="dropdown-item" href="#">Himpunan Mahasiswa</a>
                        <a class="dropdown-item" href="#">Komunitas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="stafdosen" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Staf & Dosen</a>
                    <div class="dropdown-menu" aria-labelledby="stafdosen">
                        <a class="dropdown-item" href="#">Portal Dosen</a>
                        <a class="dropdown-item" href="#">E-Learning</a>
                        <a class="dropdown-item" href="#">Online MIS</a>
                        <a class="dropdown-item" href="#">ETHOL</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="ortualumni" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Orangtua dan Alumni</a>
                    <div class="dropdown-menu" aria-labelledby="ortualumni">
                        <a class="dropdown-item" href="#">Jalur Penerimaan</a>
                        <a class="dropdown-item" href="#">Job Arrangement System</a>
                        <a class="dropdown-item" href="#">Berita</a>
                        <a class="dropdown-item" href="#">Kemahasiswaan</a>
                        <a class="dropdown-item" href="#">Inkubator Bisnis : PENS Sky Venture</a>
                    </div>
                </li>
                <li class="nav-item bahasa">
                    <a href="#" class="nav-link">
                        <img class="mr-2" src="/public/img/lang/eng.svg" alt="english" style="height: 13px;">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav id="mainNav" class="navbar navbar-expand-lg mainNav">
    <div class="container">
        <a href="<?= base_url(); ?>" class="navbar-brand">
            <img src="<?= base_url(); ?>/public/img/corp-logo/inline-logo-white.svg" alt="Politeknik Elektronika Negeri Surabaya">
        </a>
        <div class="navbar-toggler-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsemainNav" aria-controls="collapsemainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="collapsemainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item submission">
                    <a href="https://pmb.pens.ac.id" class="nav-link">PENERIMAAN</a>
                </li>
                <li class="nav-item <?= $page_name == 'akademik' ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>/pages/akademik" class="nav-link <?= $page_name == 'akademik' ? 'active' : ''; ?>">AKADEMIK</a>
                </li>
                <li class="nav-item <?= $page_name == 'berita' ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>/pages/berita" class="nav-link <?= $page_name == 'berita' ? 'active' : ''; ?>">BERITA</a>
                </li>
                <li class="nav-item <?= $page_name == 'layanan' ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>/pages/layanan" class="nav-link <?= $page_name == 'layanan' ? 'active' : ''; ?>">LAYANAN</a>
                </li>
                <li class="nav-item <?= $page_name == 'tentang' ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>/pages/tentang" class="nav-link <?= $page_name == 'tentang' ? 'active' : ''; ?>">TENTANG PENS</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>