<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <input type="hidden" name="id" value="<?= $idsite['id']; ?>">

            <div class="form-group">
                <h3> Id Site : <?= $idsite['id_site']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Provider Id : <?= $idsite['nama_perusahaan']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Kecamatan Id : <?= $idsite['kecamatan']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Desa Id : <?= $idsite['desa']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Lokasi : <?= $idsite['lokasi']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Latitude : <?= $idsite['latitude']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Longitude : <?= $idsite['longitude']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Radius : <?= $idsite['radius']; ?></h3>
            </div>

            <div class="form-group">
                <h3>Warna : <?= $idsite['warna']; ?></label>
            </div>

            <div class="form-group">
                <div class="col-sm-8">
                    <h3>Foto : </h3>
                    <img src="<?= base_url('assets/img/idsite/'); ?><?= $idsite['gambar']; ?>" class="img-thumbnail">
                </div>
            </div>


        </div>

    </div>

</div>
<!-- /.containe r-fluid -->

</div>
<!-- End of Main Content -->