<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-success">
            <div class="box-body">
                <img class="" src="<?= base_url('fotodosen/' . $dosen['foto_dosen']) ?>" width="80%" height="225px">
                <h4 class="text-center"><?= $dosen['nidn'] ?></h4>
                <h4 class="text-center"><?= $dosen['nama_dosen'] ?></h4>


            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-md-9">
        <!-- About Me Box -->
        <div class="box box-success">

            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-responsive">
                    <tr>
                        <th>Tahun Akademik </th>
                        <th>:</th>
                        <th><?= $ta['ta'] ?>/<?= $ta['semester'] ?></th>
                    </tr>

                    <tr>
                        <th>Kode</th>
                        <th>:</th>
                        <td><?= $dosen['kode_dosen'] ?></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>No HP </th>
                        <th>:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>E-mail </th>
                        <th>:</th>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div><!-- /.box -->
    </div>
</div>