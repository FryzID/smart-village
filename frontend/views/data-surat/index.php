<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\surat\SuratKelahiran;

/* @var $this yii\web\View */
/* @var $model common\models\LaporAduan */

$this->title = 'Data - Data Surat yang di Kirim';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="text-center mb-5">Data - Data Surat yang di Kirim</h3>

    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a id="kelahiran-tab" data-toggle="tab" href="#kelahiran" class="nav-link">Surat Kelahiran</a></li>
                <li class="nav-item"><a id="kematian-tab" data-toggle="tab" href="#kematian" class="nav-link">Surat Kematian</a></li>
                <li class="nav-item"><a id="desa-tab" data-toggle="tab" href="#desa" class="nav-link">Surat Keterangan Desa</a></li>
                <li class="nav-item"><a id="miskin-tab" data-toggle="tab" href="#miskin" class="nav-link">Surat Keterangan Miskin</a></li>
            </ul>
        </div>

        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kelahiran" role="tabpanel" aria-labelledby="kelahiran-tab"> 
                    <h3 class="text-center mb-5">Surat Kelahiran</h3>

                    <div class="table-responsive text-center mt-5">
                        <table class="table table-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1?>
                            <?php foreach ($suratDesa as $item) {?>
                                <tr>
                                    <th><?= $nomor++ ?></th>
                                    
                                    
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="kematian" role="tabpanel" aria-labelledby="kematian-tab"> 
                    <h3 class="text-center mb-5">Surat Kematian</h3>

                    <div class="table-responsive text-center mt-5">
                        <table class="table table-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1?>
                            <?php foreach ($suratDesa as $item) {?>
                                <tr>
                                    <th><?= $nomor++ ?></th>
                                    
                                    
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="desa" role="tabpanel" aria-labelledby="desa-tab"> 
                    <h3 class="text-center mb-5">Surat Keterangan Desa</h3>

                    <div class="table-responsive text-center mt-5">
                        <table class="table table-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Judul Surat</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1?>
                            <?php foreach ($suratDesa as $item) {?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $item->no_surat ?></td>
                                    <td><?= $item->judul_surat ?></td>
                                    <td><?= $item->created_at ?></td>
                                    <td><?= $item->statusSurat->nama ?></td>
                                    <td><?= Html::a('<i class="fa fa-print"></i>', ['/data-surat/print-data', 'id' => $item->id],['class' => 'btn btn-primary btn-sm']); ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="miskin" role="tabpanel" aria-labelledby="miskin-tab"> 
                    <h3 class="text-center mb-5">Surat Keterangan Miskin</h3>

                    <div class="table-responsive text-center mt-5">
                        <table class="table table-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1?>
                            <?php foreach ($suratMiskin as $item) {?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $item->no_surat ?></td>
                                    <td><?= $item->keterangan ?></td>
                                    <td><?= $item->created_at ?></td>
                                    <td><?= $item->statusKeterangan->nama ?></td>
                                    <td><?= Html::a('<i class="fa fa-print"></i>', ['/data-surat/print-data', 'id' => $item->id],['class' => 'btn btn-primary btn-sm']); ?></td>
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
    


