<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $provider['id']; ?>">
                <div class="form-group row">
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $provider['id_perusahaan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $provider['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="marker_color" class="col-sm-2 col-form-label">Marker Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="marker_color" name="marker_color" value="<?= $provider['marker_color']; ?>">
                        <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                    </div>
                </div>

            </form>
        </div>

    </div>

</div>
<!-- /.containe r-fluid -->

</div>
<!-- End of Main Content -->