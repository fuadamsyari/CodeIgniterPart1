<div class="container mt-2">
    <h3 class="text-center my-3">Daftar Mahasiswa</h3>
    <div class="row my-3 justify-content-end ">
        <div class="col-md-4 text-center">
            <a href="<?= base_url() ?>mahasiswa/" class="btn btn-success"><i class="bi bi-arrow-clockwise"></i> Refresh</a>
        </div>
        <div class="col-md-4 text-center">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="keyword" type="text" class="form-control" placeholder="Cari Mahasiswa . . ." aria-describedby="button-addon2">
                    <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i> Cari</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-center">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-success"> <i class="bi bi-person-plus-fill"></i> Tambah Mahasiswa</a>
        </div>
    </div>
    <ol class="list-group list-group-numbered row mx-5 ">
        <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Mahasiswa Tidak ditemukan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata()) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>Berhasil <?= $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php $this->session->sess_destroy(); ?>
        <?php endif; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li class="col-lg-12 list-group-item d-flex justify-content-between align-items-center">
                <div class="ms-2 me-auto">
                    <div class="fw-bold"><?= $mhs['nama'] ?></div>
                    <?= $mhs['nrp'] ?>
                </div>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-success"><i class="bi bi-view-list"></i></a>
                    <a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="bi bi-trash3-fill"></i></a>
                </div>
            </li>
        <?php endforeach ?>
    </ol>
</div>