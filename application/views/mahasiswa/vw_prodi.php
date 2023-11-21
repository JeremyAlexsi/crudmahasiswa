 <!-- MAIN CONTENT-->
 <div class="main-content">
 	<div class="section__content section__content--p30">
 		<div class="container-fluid">
 			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
 			<div class="row">
 				<div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah_prodi" class="btn btn-info mb-2">Tambah Prodi</a></div>
 				<div class="card">
 					<div class="card-content">
 						<div class="card-body">
 							<div class="col-md-12">
 								<table class="table table-stripped">
 									<thead>
 										<tr>
 											<td>No</td>
 											<td>Nama Prodi</td>
 											<td>Ruangan</td>
 											<td>Jurusan</td>
 											<td>Akreditasi</td>
 											<td>Nama Kaprodi</td>
 											<td>Tahun Berdiri</td>
 											<td>Output Lulusan</td>
 											<td>Aksi</td>
 										</tr>
 									</thead>
 									<tbody>
									 <?php $i = 1; ?>
										<?php foreach ($prodi as $us) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $us['nama']; ?></td>
												<td><?= $us['ruangan']; ?></td>
												<td><?= $us['jurusan']; ?></td>
												<td><?= $us['akreditasi']; ?></td>
												<td><?= $us['nama_kaprodi']; ?></td>
												<td><?= $us['tahun_berdiri']; ?></td>
												<td><?= $us['output_lulusan']; ?></td>
												<td>
 												<a href="<?= base_url('Prodi/hapus/'). $us['id']; ?>" class="badge badge-danger">Hapus</a>
 												<a href="<?= base_url('Prodi/edit/'). $us['id']; ?>" class="badge badge-warning">Edit</a>
 												<a href="<?= base_url('Prodi/detail/'). $us['id']; ?>" class="badge badge-info">Detail</a>
 											</td>
											</tr>
											<?php $i++; ?>
										<?php endforeach;?>	
 									</tbody>
 								</table>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>
 		</div>
 	</div>
 </div>
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
 </div>
 </div>
