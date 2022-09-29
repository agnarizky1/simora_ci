<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $kecamatan['id']; ?>">

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $kecamatan['kecamatan']; ?>">
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