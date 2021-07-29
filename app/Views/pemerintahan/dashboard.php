<?= $this->include('pemerintahan/header') ?>
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data Tanggapan</h5>
            </div>

            <!-- Breadcrumb -->
            <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="#"><span>table</span></a></li>
                            <li class="active"><span>Export</span></li>
                        </ol>
                    </div> -->
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <!-- warning -->
        <div class="alert-success">
            <?= session()->getflashdata('success'); ?>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pt-0">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="example" class="table table-hover display  pb-30">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th style="width: 25%;">Rekomendasi</th>
                                                <th style="width: 30%;">Tanggapan</th>
                                                <th style="width: 15%;">OPD</th>
                                                <th style="width: 25%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th style="width: 30%;">Rekomendasi</th>
                                                <th style="width: 35%;">Tanggapan</th>
                                                <th style="width: 15%;">OPD</th>
                                                <th style="width: 15%;">Aksi</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($data_rekomendasi as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $value['rekomendasi']; ?></td>
                                                    <?php if ($value['tanggapan'] == Null) { ?>
                                                        <td><i>
                                                                <font color='red'>belum diisi</font>
                                                            </i></td>
                                                    <?php } else { ?>
                                                        <td><?= $value['tanggapan']; ?></td>
                                                    <?php } ?>
                                                    <td><?= $value['nm_opd']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Admin/edit_tanggapan/' . $value['id_rekomendasi']) ?>" class="btn btn-warning">Edit</a>
                                                        <a href="<?= base_url('Admin/hapus_tanggapan/' . $value['id_rekomendasi']) ?>" class="btn btn-danger" onclick="return confirm ('Apakah yakin ingin menghapus data ?')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <?= $this->include('pemerintahan/footer') ?>