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
                            Form Ubah Data Mahasiswa
                        </div>

                        <div class="card-body">
                            <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" id="nama" class="form-control" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" id="nim" class="form-control" placeholder="NIM">
                                    <?= form_error('nim', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="Laki-laki"><?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki"){
                                                echo "selected ";
                                        }?>Laki-laki</option>
                                        <option value="Perempuan"><?php if ($mahasiswa['jenis_kelamin'] == "Perempuan"){
                                                echo "selected ";
                                        }?>Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="<?= $mahasiswa['email']; ?>" id="email" class="form-control" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select name="prodi" id="prodi" class="form-control">
                                        <?php foreach ($prodi as $p) : ?>
                                        <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
                                            echo "selected";
                                        } ?>><?= $p['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" id="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
                                    <?= form_error('asal_sekolah', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" id="no_hp" class="form-control" placeholder="No HP">
                                    <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" id="alamat" class="form-control" placeholder="Alamat">
                                    <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Mahasiswa</button>
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