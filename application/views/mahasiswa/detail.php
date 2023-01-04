<div class="container">
    <div class="row mt-3">
        <div class="col-md-12 text-center">
            <h3>Data Lengkap <?= $mahasiswa['nama'] ?></h3>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-2 ">
            <ul class="list-group mt-1">
                <li class="list-group-item active bg-light text-dark">Nama</li>
                <li class="list-group-item">NRP</li>
                <li class="list-group-item">Email</li>
                <li class="list-group-item">Jurusan</li>
            </ul>
        </div>
        <div class="col-md-4 ">
            <ul class="list-group mt-1">
                <li class="list-group-item active bg-light text-dark"><?= $mahasiswa['nama'] ?></li>
                <li class="list-group-item"><?= $mahasiswa['nrp'] ?></li>
                <li class="list-group-item"><?= $mahasiswa['email'] ?></li>
                <li class="list-group-item"><?= $mahasiswa['jurusan'] ?></li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-2">
            <a href="<?= base_url() ?>/mahasiswa" class="btn btn-secondary"><i class="bi bi-card-list"></i> Kembali</a>
        </div>
    </div>
</div>