<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- Illustrations -->
    <div class="card shadow mb-4 col-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Portofolio</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/'); ?>img/undraw_posting_photo.svg" alt="...">
            </div>
            <p>Ini adalah Menu pada Web Simora untuk Member yang berfungsi untuk menginputkan data Tower. Jika ingin memasukkan latitude dan longitude pada text box
                member dapat memasukkan secara manual ataupun otomatis, jika manual member mengetikkan sendiri langitude dan lotitude menggunakan keyboard, tetapi jika otomatis
                member dapat mengklik marker yang disediakan oleh map dan menggesarnya ke tempat yang di inginkan maka text box latitude dan longitude akan otomatis terisi.
            </p>
            <p class="font-weight-bold">
                HAPPY WORKING :)
            </p>
        </div>
    </div>

    <div class="col-sm-5">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <?php echo form_open_multipart('Member/inputTowerTambah'); ?>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_site">ID Site</label>
                <input name="id_site" id="id_site" placeholder="ID Site" class="form-control">
            </div>

            <div class="from-group">
                <label for="provider_id">Provider</label>
                <select name="provider_id" id="provider_id" class="form-control">
                    <option value="">Select Provider</option>
                    <?php foreach ($nama_perusahaan as $np) : ?>
                        <option value="<?= $np['id']; ?>"> <?= $np['nama_perusahaan']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="from-group">
                <label for="kecamatan_id">Kecamatan</label>
                <select name="kecamatan_id" id="kecamatan_id" class="form-control">
                    <option value="">Pilih Kecamatan</option>
                    <?php foreach ($kecamatan as $kt) : ?>
                        <option value="<?= $kt['id']; ?>"> <?= $kt['kecamatan']; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="from-group">
                <label for="desa_id">Desa</label>
                <select name="desa_id" id="desa_id" class="form-control">
                    <option value="">Pilih Desa</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input name="lokasi" id="lokasi" placeholder="Lokasi" class="form-control">
            </div>

            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input id="latitude" name="latitude" placeholder="Latitude" class="form-control" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input id="longitude" name="longitude" placeholder="Longitude" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="radius">Radius</label>
                <select name="radius" id="radius" class="form-control">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                </select>
            </div>
            <div class="from-group">
                <label for="warna">Warna</label>
                <select name="warna" id="warna" class="form-control">
                    <option value="">Select Warna</option>
                </select>
            </div>

            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" id="gambar" name="gambar" class="form-control">
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="submit" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>

    <br>
    <div class="col">
        <div id="mapid" style="height:500px"></div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>
    //CARA NAMPILKAN MAP
    var mymap = L.map('mapid').setView([-7.98173, 112.6301763], 12);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/streets-v11',
        maxZoom: 18
    }).addTo(mymap);

    //CARA MENDAPATKAN KOORDINAT LOKASI

    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");

    var curLocation = [-7.98173, 112.6301763];

    mymap.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true',
        }).bindPopup(position).update();
        $("#latitude").val(position.lat);
        $("#longitude").val(position.lng);
    });
    mymap.addLayer(marker);

    mymap.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (!marker) {
            marker = L.marker(e.latlng).addTo(mymap);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)                                    
        $('#kecamatan_id').change(function() { // Ketika user mengganti atau memilih data provinsi
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Member/getDesa')  ?>",
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
                url: "<?= base_url('Member/getMarkerColor')  ?>",
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