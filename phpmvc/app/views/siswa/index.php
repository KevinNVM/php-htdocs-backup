<div class="container mt-3">

	<div class="row">
		<div class="col-md-6">
			<?php Flasher::flash() ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-6">
		<button type="button" class="btn btn-sm btn-primary btnAddData" data-bs-toggle="modal" data-bs-target="#form-modal">
				Tambah Data Siswa
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
		<form action="<?= BASEURL ?>/siswa/cari" method="POST">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Cari Siswa" aria-label="Cari Siswa" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="false">
				<button class="btn btn-outline-primary" type="submit" id="btnCari">Cari</button>
			</div>
		</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Daftar Siswa</h3>

			<ul class="list-group">
				<?php foreach ($data['siswa'] as $siswa) : ?>
					<li class="list-group-item">
					<a class="text-decoration-none link-dark" title="Detail <?= $siswa['nama'] ?>" href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id'] ?>">
						<?= $siswa['nama'] ?>
						</a>
							<a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id'] ?>" title="Hapus Data <?= $siswa['nama'] ?>" onclick="return confirm('Hapus Data <?= $siswa['nama'] ?>?')" class="text-decoration-none link-danger float-end"><i class="bi bi-trash"></i></a>
					<a 
					class="text-decoration-none link-success float-end me-2 showEditModal" 
					title="Ubah Data <?= $siswa['nama'] ?>" 
					data-bs-toggle="modal" 
					data-bs-target="#form-modal"
					data-id="<?= $siswa['id'] ?>" 
					href="<?= BASEURL ?>/siswa/ubah/<?= $siswa['id'] ?>">
					<i class="bi bi-pencil-square"></i>
				</a>
				</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		
	</div>
	<!-- Modal -->
	<div class="modal fade" id="form-modal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= BASEURL ?>/siswa/tambah" method="POST">
					<input type="hidden" name="id" id="id">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
						</div>

						<div class="form-group">
							<label for="kelas">Kelas</label>
							<input type="text" name="kelas" class="form-control" id="kelas">
						</div>

						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-select" name="jurusan" id="jurusan">
								<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
								<option value="Multimedia">Multimedia</option>
								<option value="Teknik Mesin">Teknik Mesin</option>
								<option value="Tata Boga">Tata Boga</option>
							</select>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email">
						</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>

