<div class="container">
  <div class="row mt-3">
    <div class="col-md-2">
      <h3 class="">List of Peoples</h3>
    </div>
    <div class="col-md-5">
      <form class="form-group" method="post" action="<?= base_url('peoples') ?>">
        <div class="input-group mb-3">
          <input class="form-control" autocomplete="off" autofocus name="keyword" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <input class="btn btn-outline-success" placeholder="Search" type="submit" name="submit"></input>
          </div>
        </div>
      </form>
      <h5>Total Pencarian : <?= $total_rows ?></h5>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($peoples)) : ?>
            <tr>
              <td colspan="4">
                <div class="alert alert-danger" role="alert">
                  Data not Found!
                </div>
              </td>
            </tr>
          <?php endif ?>
          <?php foreach ($peoples as $p) : ?>
            <tr>
              <th><?= ++$start ?></th>
              <td><?= $p['name'] ?></td>
              <td><?= $p['email'] ?></td>
              <td>
                <a href="" class="btn btn-sm btn-warning">Detail</a>
                <a href="" class="btn btn-sm btn-success">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</div>