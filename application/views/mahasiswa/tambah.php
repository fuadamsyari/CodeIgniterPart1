<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-12">
            <h3>Tambah Data Mahasiswa</h3>
        </div>
        <div class="row mt-3 ">
            <div class="col-md-6 card p-4 shadow">
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama">
                            <div class="form-text text-danger">
                                <?= form_error('nama') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nrp" class="form-control" id="nrp">
                            <div class="form-text text-danger">
                                <?= form_error('nrp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email">
                            <div class="form-text text-danger">
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                        <select name="jurusan" class=" form-select justify-content-end" style="width: 72%;" id="jurusan">
                            <?php foreach ($jurusan as $j) : ?>
                                <option value="<?= $j ?>"><?= $j ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <button type="submit" class="btn btn-hover btn-success" name="tambah"><i class="bi bi-person-fill-add"></i> Tambahkan</button>
                    </div>
                    <div class="mb-3 row">
                        <a href="<?= base_url()  ?>mahasiswa" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>