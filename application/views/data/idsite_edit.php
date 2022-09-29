<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $idsite['id']; ?>">

                <div class="form-group row">
                    <label for="id_site" class="col-sm-2 col-form-label">Id Site</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_site" name="id_site" value="<?= $idsite['id_site']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="provider_id" class="col-sm-2 col-form-label">Provider</label>
                    <div class="col-sm-10">
                        <select name="provider_id" id="provider_id" class="form-control col-sm-6">
                            <option value="">Select Provider</option>
                            <?php foreach ($nama_perusahaan as $np) : ?>
                                <option value="<?= $np['id']; ?> "><?= $np['nama_perusahaan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kecamatan_id" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <select name="kecamatan_id" id="kecamatan_id" class="form-control col-sm-6">
                            <option value="">Select Kecamatan</option>
                            <?php foreach ($kecamatan as $kec) : ?>
                                <option value="<?= $kec['id']; ?> "><?= $kec['kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="desa_id" class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-10">
                        <select name="desa_id" id="desa_id" class="form-control col-sm-6">
                            <option value="">Select Desa</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $idsite['lokasi']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $idsite['latitude']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $idsite['longitude']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="radius" class="col-sm-2 col-form-label">Radius</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="radius" name="radius" value="<?= $idsite['radius']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                        <select name="warna" id="warna" class="form-control col-sm-6">
                            <option value="">Select Warna</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload Foto</label>
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/idsite/') . $idsite['gambar'] ?>" class="img-thumbnail">
                    </div>
                    <input type="file" id="gambar" name="gambar" class="form-control">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)                                    
        $('#kecamatan_id').change(function() { // Ketika user mengganti atau memilih data provinsi
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Idsite/getDesa')  ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    $('#desa_id').html(response);

                }

            });
        });
    });
</script>
<script>
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)                                    
        $('#provider_id').change(function() { // Ketika user mengganti atau memilih data provinsi
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Idsite/getMarkerColor')  ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    $('#warna').html(response);

                }

            });
        });
    });
</script>