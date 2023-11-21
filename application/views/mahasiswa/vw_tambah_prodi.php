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
                            <form action="<?= base_url('Prodi/upload')?>" method="POST">
								<div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <select name="nama" id="nama" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ruangan">Ruangan</label>
                                    <input type="text" name="ruangan" id="ruangan" class="form-control" placeholder="Ruangan">
                                </div>
								<div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Jurusan">
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <select name="akreditasi" id="akreditasi" class="form-control">
                                        <option value="">Akreditasi</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
										<option value="C">C</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kaprodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" id="nama_kaprodi" class="form-control"
                                        placeholder="Nama Kaprodi">
                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" id="tahun_berdiri" class="form-control"
                                        placeholder="Tahun Berdiri">
                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" id="output_lulusan" class="form-control" placeholder="Output Lulusan">
                                </div>
                                <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
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
