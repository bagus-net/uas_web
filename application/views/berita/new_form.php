<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("layout/v_head.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("layout/v_header.php") ?>
	<?php $this->load->view("layout/v_nav.php") ?>
	<div class="col-md-12">
	<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Add Berita</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form action="<?=base_url()?>index.php/berita/add" method="post" enctype="multipart/form-data">
					<div class="card-body">
					<div class="form-group">
						<label for="name">Jenis Berita*</label>
							<input class="form-control <?php echo form_error('id_jenis_berita') ? 'is-invalid':'' ?>"
								type="text" name="id_jenis_berita" placeholder="Jenis Berita" />
							<div class="invalid-feedback">
								<?php echo form_error('id_jenis_berita') ?>
							</div>
					</div>
					<div class="form-group">
						<label for="name">Judul*</label>
							<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								type="text" name="judul" placeholder="Judul" />
							<div class="invalid-feedback">
								<?php echo form_error('judul') ?>
							</div>
					</div>
					<div class="form-group">
						<label for="name">Berita*</label>
							<input class="form-control <?php echo form_error('berita') ? 'is-invalid':'' ?>"
								type="text" name="berita" placeholder="Berita" />
							<div class="invalid-feedback">
								<?php echo form_error('berita') ?>
							</div>
					</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<input class="btn btn-success" type="submit" name="btn" value="Save" />
						<a class="col-md-1 btn btn-primary" href="<?=base_url()?>index.php/berita">Back</a>
					</div>
				</form>
				</div>
		</div>
	
<?php $this->load->view("layout/v_footer.php") ?>