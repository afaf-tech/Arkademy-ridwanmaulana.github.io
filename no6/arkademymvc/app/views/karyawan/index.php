<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-warning tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/karyawan/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Karyawan.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-warning" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Karyawan</h3>
      <ul class="list-group">
        <?php foreach ($data['kry'] as $kry) : ?>
          <li class="list-group-item ">
            <?= $kry['nama']; ?>
            <a href="<?= BASEURL;  ?>/karyawan/hapus/<?= $kry['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
            <a href="<?= BASEURL;  ?>/karyawan/ubah/<?= $kry['id']; ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kry['id']; ?>">Ubah</a>
            <a href="<?= BASEURL;  ?>/karyawan/detail/<?= $kry['id']; ?>" class="badge badge-success float-right ml-1">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>


    </div>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/karyawan/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="id_work">Pekerjaan</label>
            <input type="number" class="form-control" id="id_work" name="id_work">
          </div>

          <div class="form-group">
            <label for="id_salary">Salary</label>
            <input type="id_salary" class="form-control" id="id_salary" name="id_salary">
          </div>
          ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>