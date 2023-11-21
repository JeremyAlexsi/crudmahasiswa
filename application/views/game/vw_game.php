 <!-- MAIN CONTENT-->
 <div class="main-content">
 	<div class="section__content section__content--p30">
 		<div class="container-fluid">
 			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
 			<div class="row">
 				<div class="col-md-6"><a href="<?= base_url() ?>Game/tambah_game" class="btn btn-info mb-2">Tambah Game</a></div>
 				<div class="card">
 					<div class="card-content">
 						<div class="card-body">
 							<div class="col-md-12">
							 <?= $this->session->flashdata('message');?>
 								<table class="table table-stripped">
 									<thead>
 										<tr>
 											<td>No</td>
 											<td>Nama Game</td>
 											<td>Pengembang</td>
 											<td>Penerbit</td>
 											<td>Franchise</td>
 											<td>Genre</td>
 											<td>Tahun Rilis</td>
											<td>Gambar</td>
 											<td>Aksi</td>
 										</tr>
 									</thead>
 									<tbody>
									 <?php $i = 1; ?>
										<?php foreach ($game as $us) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $us['nama']; ?></td>
												<td><?= $us['pengembang']; ?></td>
												<td><?= $us['penerbit']; ?></td>
												<td><?= $us['franchise']; ?></td>
												<td><?= $us['genre']; ?></td>
												<td><?= $us['tahun_rilis']; ?></td>
												<td><img src="<?= base_url('assets/images/game/') . $us['gambar'];?>" style="width: 100px;" class="img-thumbnail"></td>
												<td>
 												<a href="<?= base_url('Game/hapus/'). $us['id']; ?>" class="badge badge-danger">Hapus</a>
 												<a href="<?= base_url('Game/edit/'). $us['id']; ?>" class="badge badge-warning">Edit</a>
 												<a href="<?= base_url('Game/detail/'). $us['id']; ?>" class="badge badge-info">Detail</a>
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
