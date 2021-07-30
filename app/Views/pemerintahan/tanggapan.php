<?= $this->include('pemerintahan/header') ?>
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Tanggapan Rekomendasi OPD</h5>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pt-0">
                            <div class="form-wrap">
                                <form action="<?= base_url('Admin/save_tanggapan'); ?>" method="POST" class="form-horizontal">
                                    <div class="form-body">
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Form Input Rekomendasi</h6>
                                        <hr class="light-grey-hr" />

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 text-left">Rekomendasi</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="rekomendasi" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 text-left">Asal Rekomendasi</label>
                                                    <div class="col-md-10">
                                                        <select name="asal_rekomendasi" class=" form-control">
                                                            <option value="-">-</option>
                                                            <option value="DPRD">DPRD</option>
                                                            <option value="Fraksi">Fraksi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 text-left">OPD Pengampu</label>
                                                    <div class="col-md-10">
                                                        <select name="opd" class=" form-control">
                                                            <option value="-">-</option>
                                                            <?php foreach ($opd as $key => $isi) { ?>
                                                                <option value="<?= $isi['id_opd']; ?>"><?= $isi['nm_opd']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Row -->
                                    </div>
                                    <div class="form-actions mt-10">
                                        <!-- warning -->
                                        <div class="alert-warning">
                                            <?= session()->getflashdata('gagal'); ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <div class="row">

                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success  mr-10">Simpan</button>
                                                        <!-- <button type="button" class="btn btn-default">Cancel</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <?= $this->include('pemerintahan/footer') ?>