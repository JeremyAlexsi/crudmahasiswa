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
                            Form Tambah Prodi
                        </div>

                        <div class="card-body">
                            <form action="<?= base_url('Prodi/update')?>" method="POST">
                            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
								<div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" id="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="ruangan">Ruangan</label>
                                    <input type="text" name="ruangan" value="<?= $mahasiswa['ruangan']; ?>" id="jurusan" class="form-control" placeholder="Ruangan">
                                </div>
								<div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>" id="jurusan" class="form-control" placeholder="Jurusan">
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <input type="text" name="akreditasi" value="<?= $mahasiswa['akreditasi']; ?>" id="akreditasi" class="form-control" placeholder="Akreditasi">
                                </div>
                                <div class="form-group">
                                    <label for="nama_kaprodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" value="<?= $mahasiswa['nama_kaprodi']; ?>" id="nama_kaprodi" class="form-control" placeholder="Nama Kaprodi">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" value="<?= $mahasiswa['tahun_berdiri']; ?>" id="tahun_berdiri" class="form-control" placeholder="Tahun Berdiri">
                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" value="<?= $mahasiswa['output_lulusan']; ?>" id="output_lulusan" class="form-control" placeholder="Output Lulusan">
                                </div>
                                <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                    Prodi</button>
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
