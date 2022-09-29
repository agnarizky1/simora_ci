<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Member</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <img src="<?= base_url('assets/img/malang/logo_kabupaten.png'); ?>" style="position: absolute; width: 60px; height: auto;" alt="">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    DINAS KOMUNIKASI DAN INFORMATIKA PEMERINTAH KABUPATEN MALANG
                    <br>SIMORA CONTROLLING TELECOMMUNICATION INFRASTRUCTURE MANAGEMENT
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">

    <table class="table table-bordered">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Marker Color</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($provider as $p) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $p['nama_perusahaan']; ?></td>
                <td><?= $p['alamat']; ?></td>
                <td>
                    <svg height="20" width="20">
                        <circle cx="10" cy="10" r="5" fill="<?= $p['marker_color']; ?>"></circle>
                    </svg>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>