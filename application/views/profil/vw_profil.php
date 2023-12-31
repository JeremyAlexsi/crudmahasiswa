<div class="container-fluid">
    <div class="d-flex justify-content-start align-items-start" style="min-height: 100vh; flex-direction: column;margin-top: 10%;">
        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        <div class="card" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['nama']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
