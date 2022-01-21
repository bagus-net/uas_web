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
					<h3 class="card-title">Edit Jenis Berita</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form action="<?php base_url("index.php/jenisberita/editform") ?>" method="post" enctype="multipart/form-data">
					<div class="card-body">
					<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $jenis_berita->id ?>" />
						<label for="name">Jenis Berita*</label>
							<input class="form-control <?php echo form_error('jenis_berita') ? 'is-invalid':'' ?>"
								type="text" name="jenis_berita" placeholder="Jenis_Berita" value="<?php echo $jenis_berita->jenis_berita ?>"/>
							<div class="invalid-feedback">
								<?php echo form_error('jenis_berita') ?>
							</div>
					</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<input class="btn btn-success" type="submit" name="btn" value="Edit" />
						<a class="col-md-1 btn btn-primary" href="<?=base_url()?>index.php/jenisberita">Back</a>
					</div>
				</form>
				</div>
		</div>
	
<?php $this->load->view("layout/v_footer.php") ?>