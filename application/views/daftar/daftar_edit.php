<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $nama_perusahaan['id']; ?>">

                <div class="form-group row">
                    <label for="nama_perusahaan" class="col-sm-2 col-auto">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $nama_perusahaan['nama_perusahaan']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $nama_perusahaan['alamat']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Marker Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="marker_color" name="marker_color" value="<?= $nama_perusahaan['marker_color']; ?>">
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