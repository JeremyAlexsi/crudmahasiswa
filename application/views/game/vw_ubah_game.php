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
							Form Ubah Game
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $game['id']; ?>">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" value="<?= $game['nama']; ?>" id="nama" class="form-control" placeholder="Nama">
									<?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="pengembang">Pengembang</label>
									<input type="text" name="pengembang" value="<?= $game['pengembang']; ?>" id="pengembang" class="form-control" placeholder="Pengembang">
									<?= form_error('pengembang', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="penerbit">Penerbit</label>
									<input type="text" name="penerbit" value="<?= $game['penerbit']; ?>" id="penerbit" class="form-control" placeholder="Penerbit">
									<?= form_error('penerbit', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="franchise">Franchise</label>
									<input type="text" name="franchise" value="<?= $game['franchise']; ?>" id="franchise" class="form-control" placeholder="Franchise">
									<?= form_error('franchise', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="genre">Genre</label>
									<input type="text" name="genre" value="<?= $game['genre']; ?>" id="genre" class="form-control" placeholder="Genre">
									<?= form_error('genre', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="tahun_rilis">Tahun Rilis</label>
									<input type="text" name="tahun_rilis" value="<?= $game['tahun_rilis']; ?>" id="tahun_rilis" class="form-control" placeholder="Tahun Rilis">
									<?= form_error('tahun_rilis', '<small class="text-danger p1-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<img src="<?= base_url('assets/images/game/') . $game['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
									<div class="custom-file">
										<input type="file" name="gambar" id="gambar" class="custom-file-input" placeholder="Gambar">
										<label for="gambar" class="custom-file-label">Choose File</label>
										<?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
									</div>
								</div>
								<a href="<?= base_url('Game') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
									Game</button>
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
