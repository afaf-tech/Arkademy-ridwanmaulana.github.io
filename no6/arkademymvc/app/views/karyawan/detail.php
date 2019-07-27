<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['kry']['nama'];  ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['kry']['salary']; ?></h6>
            <p class="card-text"><?= $data['kry']['pekerjaan'];  ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa/" class="card-link"> Kembali </a>
        </div>
    </div>

</div>