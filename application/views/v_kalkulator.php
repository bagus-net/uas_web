<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kalkulator <?php echo $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url()?>index.php/kalkulator" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Angka Pertama</label>
                    <input name="angka1" id="angka1" class="form-control" id="exampleInputEmail1" placeholder="Angka 1" value="<?= $angka1?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Angka Kedua</label>
                    <input name="angka2" id="angka2" class="form-control" id="exampleInputEmail1" placeholder="Angka 2" value="<?= $angka2?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hasil</label>
                    <input name="hasil" id="hasil" class="form-control" id="exampleInputEmail1" placeholder="Hasil" value="<?= $hasil?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>
