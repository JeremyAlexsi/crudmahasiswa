 <!-- MAIN CONTENT-->
 <div class="main-content">
 	<div class="section__content section__content--p30">
 		<div class="container-fluid">
 			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
 			<div class="row">
 				<div class="col-md-12"><a href="<?= base_url() ?>Calon_presiden/tambah" class="btn btn-info mb-2">Tambah Calon Presiden</a></div>
 				<div class="card">
 					<div class="card-content">
 						<div class="card-body">
 							<div class="col-md-12">
 								<table class="table table-stripped">
 									<thead>
 										<tr>
 											<td>No</td>
 											<td>Nama</td>
 											<td>Nik</td>
 											<td>Asal</td>
											 <td>Partai Pendukung</td>
											 <td>Riwayat Pekerjaan</td>
											 <td>Umur</td>
 											<td>Aksi</td>
 										</tr>
 									</thead>
 									<tbody>
 										<?php $i = 1; ?>
										<?php foreach ($calon_presiden as $us) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $us['nama_lengkap']; ?></td>
												<td><?= $us['nik']; ?></td>
												<td><?= $us['asal']; ?></td>
												<td><?= $us['partai_pendukung']; ?></td>
												<td><?= $us['riwayat_pekerjaan']; ?></td>
												<td><?= $us['umur']; ?></td>
												<td>
 												<a href="<?= base_url('Calon_presiden/hapus/'). $us['id']; ?>" class="badge badge-danger">Hapus</a>
 												<a href="<?= base_url('Calon_presiden/edit/'). $us['id']; ?>" class="badge badge-warning">Edit</a>
 												<a href="<?= base_url('Calon_presiden/detail/'). $us['id']; ?>" class="badge badge-info">Detail</a>
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
