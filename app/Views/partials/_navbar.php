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
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="calonmhs">
                        <a class="dropdown-item" href="<?= base_url(); ?>/pages/akademik">Jurusan</a>
                        <a class="dropdown-item" href="https://pmb.pens.ac.id">Jalur Penerimaan</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/pages/tentang">Tentang PENS</a>
                        <a class="dropdown-item" href="https://kemahasiswaan.pens.ac.id">Kehidupan Mahasiswa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="https://kemahasiswaan.pens.ac.id/" class="nav-link" id="mhs" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mahasiswa</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="mhs">
                        <a class="dropdown-item" href="https://online.mis.pens.ac.id">Online MIS</a>
                        <a class="dropdown-item" href="https://ethol.pens.ac.id">ETHOL</a>
                        <a class="dropdown-item" href="https://elearning.pens.ac.id">E-Learning</a>
                        <a href="https://repo.pens.ac.id" class="dropdown-item">Repo Jurnal PENS</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/tentang/kalenderakademik">Kalender Akademik</a>
                        <a class="dropdown-item" href="https://kemahasiswaan.pens.ac.id/himpunan-mahasiswa/">Himpunan Mahasiswa</a>
                        <a class="dropdown-item" href="https://kemahasiswaan.pens.ac.id/unit-kegiatan-mahasiswa/">Unit Kegiatan Mahasiswa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="stafdosen" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Staf & Dosen</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="stafdosen">
                        <a class="dropdown-item" href="https://lecturer.pens.ac.id/">Portal Dosen</a>
                        <a class="dropdown-item" href="https://elearning.pens.ac.id/">E-Learning</a>
                        <a class="dropdown-item" href="https://online.mis.pens.ac.id">Online MIS</a>
                        <a class="dropdown-item" href="https://ethol.pens.ac.id">ETHOL</a>
                        <a href="https://repo.pens.ac.id" class="dropdown-item">Repo Jurnal PENS</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="ortualumni" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Orangtua dan Alumni</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ortualumni">
                        <a class="dropdown-item" href="https://pmb.pens.ac.id/">Jalur Penerimaan</a>
                        <a class="dropdown-item" href="https://jas.pens.ac.id/">Job Arrangement System</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/pages/berita/">Berita</a>
                        <a class="dropdown-item" href="https://kemahasiswaan.pens.ac.id">Kemahasiswaan</a>
                        <a class="dropdown-item" href="https://skyventure.pens.ac.id/">Inkubator Bisnis : PENS Sky Venture</a>
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
                    <a href="https://pmb.pens.ac.id" class="nav-link">PENDAFTARAN</a>
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