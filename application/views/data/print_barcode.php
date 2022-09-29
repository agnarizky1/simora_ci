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

    <!-- BARCODE -->
    <div class="card shadow mt-4 col-xl-10">
        <div class="bg bg-danger card-header py-3">
            <font size="5" class="m-0 font-weight-bold text-white">Barcode <?= $cellplan['id_site'] ?></font>
        </div>
        <div class="card-body width:200px">
            <div class="text-center">
            </div>
            <p class="text-center">
                <?php
                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                echo '<img style="width:600px;height:250px;" src="data:image/png;base64,'
                    . base64_encode($generator->getBarcode($cellplan['id_site'], $generator::TYPE_CODE_128))
                    . '">';
                ?>
            </p>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>