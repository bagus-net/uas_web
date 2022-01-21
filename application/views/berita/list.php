<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("layout/v_head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
	<?php $this->load->view("layout/v_header.php") ?>

	<?php $this->load->view("layout/v_nav.php") ?>
	<div class="col-12">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Berita</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
		<a class="col-md-12 btn btn-primary" href="<?=base_url()?>index.php/berita/add">Add New</a>
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" border="2">
		<thead>
			<tr>
				<th>Jenis Berita</th>
				<th>Judul</th>
				<th>Berita</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($berita as $berita) : ?>
				<tr>
					<td width="150">
						<?php echo $berita->id_jenis_berita ?>
					</td>
          
					<td width="150">
						<?php echo $berita->judul ?>
					</td>

					<td width="150">
						<?php echo $berita->berita ?>
					</td>

					<td width="250">
						<a href="<?php echo site_url('berita/edit/' . $berita->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
						<a href=<?php echo site_url('berita/delete/' . $berita->id) ?> class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>

		</tbody>
		</table>
		<script>
			function deleteConfirm(url) {
				$('#btn-delete').attr('href', url);
				$('#deleteModal').modal();
			}
		</script>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<!-- /.col -->
<?php $this->load->view("layout/v_footer.php") ?>
