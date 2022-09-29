<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- BARCODE -->
            <div class="card shadow mt-4">
                <div class="bg bg-danger card-header">
                    <h6 class="m-0 font-weight-bold text-white">Barcode IdSite</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                    <p class="text-center">
                        <?php
                        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($cellplan['id_site'], $generator::TYPE_CODE_128)) . '">';
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->