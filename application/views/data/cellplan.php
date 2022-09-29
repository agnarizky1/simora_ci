<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div id="mapid" style="height: 500px;"></div>
    </div>

    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Filter Provider</th>
                <th scope="col">Filter Kecamatan</th>
                <th scope="col">Filter Desa</th>
                <!-- <th scope="col">Change Color</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>cellplan/filter_perusahaan/" method="get">
                        <div id="filter_kecamatan">
                            <select name="provider_id" id="provider_id">
                                <option value="" disabled="" selected="">Nama Perusahaan</option>
                                <?php foreach ($nama_perusahaan as $np) : ?>
                                    <option value="<?= $np['id']; ?>"><?= $np['nama_perusahaan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-danger" value="Cari Perusahaan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>cellplan/filter_kecamatan/" method="get">
                        <div id="filter_kecamatan">
                            <select name="kecamatan_id" id="kecamatan_id">
                                <option value="" disabled="" selected="">Kecamatan</option>
                                <?php foreach ($kecamatan as $kc) : ?>
                                    <option value="<?= $kc['id']; ?>"><?= $kc['kecamatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-warning" value="Cari Kecamatan">
                    </form>
                </td>
                <td>
                    <form id="formfilter" action="<?= base_url(); ?>cellplan/filter_desa/" method="get">
                        <div id="filter_desa">
                            <select name="desa_id" id="desa_id">
                                <option value="" disabled="" selected="">Desa</option>
                                <?php foreach ($desa as $ds) : ?>
                                    <option value="<?= $ds['id']; ?>"><?= $ds['desa'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success" value="Cari Desa">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    // CARA NAMPILKAN MAP
    var mymap = L.map('mapid').setView([-7.98173, 112.6301763], 9);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/streets-v11',
        maxZoom: 18
    }).addTo(mymap);

    <?php foreach ($cellplan as $cp) { ?>
        var marker = new L.marker([<?= $cp['latitude'] ?>, <?= $cp['longitude'] ?>], {

        }).bindPopup("<b>Provider : <?= $cp['nama_perusahaan'] ?></b><br> Detail Pemilik : <?= $cp['detail_pemilik'] ?><br><?= $cp['lokasi'] ?><br> Latitude : <?= $cp['latitude']  ?><br> Longitude : <?= $cp['longitude'] ?>").addTo(mymap);;
        L.circle([<?= $cp['latitude'] ?>, <?= $cp['longitude'] ?>], {
                radius: <?= $cp['radius'] ?>,
                color: '<?= $cp['warna'] ?>',
                fillColor: '<?= $cp['warna'] ?>',
                fillOpacity: 0.2,
            })
            .bindPopup("<b>Provider : <?= $cp['nama_perusahaan'] ?></b><br><?= $cp['lokasi'] ?><br> Latitude : <?= $cp['latitude']  ?><br> Longitude : <?= $cp['longitude'] ?>").addTo(mymap);
        mymap.addLayer(marker);
    <?php } ?>
</script>