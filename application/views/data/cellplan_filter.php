<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col">
        <div id="mapid" style="height: 500px;"></div>
    </div>

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

    <?php foreach ($hasil as $cp) { ?>
        var marker = new L.marker([<?= $cp['latitude'] ?>, <?= $cp['longitude'] ?>], {

        }).bindPopup("<b>Provider : <?= $cp['nama_perusahaan'] ?></b><br><?= $cp['lokasi'] ?><br> Latitude : <?= $cp['latitude']  ?><br> Longitude : <?= $cp['longitude'] ?>").addTo(mymap);;
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