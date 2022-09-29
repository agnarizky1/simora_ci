<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo form_open_multipart('pendaftaran/daftar'); ?>

    <div class="col-sm-5">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_pendaftaran">No. Pendaftaran</label>
                <input name="id_pendaftaran" id="id_pendaftaran" placeholder="ID Site" class="form-control" value="<?= $user['id'] ?>">
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" id="email" placeholder="Email" value="<?= $user['email'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" class="form-control">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal_lahir" value="<?= $user['date_created'] ?>" class="form-control">
            </div>

            <div class="from-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input id="berat_badan" name="berat_badan" placeholder="berat_badan" class="form-control" required>
            </div>

        </div>

        <div class="col-md-6">


            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input id="tinggi_badan" name="tinggi_badan" placeholder="tinggi_badan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" id="alamat" placeholder="alamat" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_wali">Nama Wali</label>
                <input id="nama_wali" name="nama_wali" placeholder="nama_wali" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input id="no_telepon" name="no_telepon" placeholder="no_telepon" class="form-control" required>
            </div>





            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>

    <div class="col">
        <div id="mapid" style="height:500px"></div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->