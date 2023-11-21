<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Calon Presiden
                        </div>

                        <div class="card-body">
                            <form action="<?= base_url('Calon_presiden/update')?>" method="POST">
                            <input type="hidden" name="id" value="<?= $calon_presiden['id']; ?>">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama</label>
                                    <input type="text" name="nama_lengkap" id="nama" value="<?= $calon_presiden['nama_lengkap']; ?>" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" id="nik" value="<?= $calon_presiden['nik']; ?>" class="form-control" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <label for="Asal">Asal</label>
                                    <input type="text" name="asal" id="asal" value="<?= $calon_presiden['asal']; ?>" class="form-control"
                                        placeholder="Asal">
                                </div>
                                <div class="form-group">
                                    <label for="partai">Partai Pendukung</label>
                                    <input type="text" name="partai_pendukung" value="<?= $calon_presiden['partai_pendukung']; ?>" id="partai_pendukung" class="form-control"
                                        placeholder="Partai Pendukung">
                                </div>
                                <div class="form-group">
                                    <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                                    <input type="text" name="riwayat_pekerjaan" id="riwayat_pekerjaan" value="<?= $calon_presiden['riwayat_pekerjaan']; ?>" class="form-control"
                                        placeholder="Riwayat Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="text" name="umur" id="umur" value="<?= $calon_presiden['umur']; ?>" class="form-control" placeholder="Umur">
                                </div>
                                <a href="<?= base_url('Calon_presiden') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                    Calon Presiden</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

</div>