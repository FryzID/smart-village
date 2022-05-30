<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-primary" style="border-radius: 10px 10px 0px 0px">
                        <h5>Dusun</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $dusun ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/admin/dusun/index'], ['class' => 'text-primary']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-info" style="border-radius: 10px 10px 0px 0px">
                        <h5>Rt/Rw</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $totalRtRw ?></p>
                    </div>
                </div>      
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/admin/rt-rw/index'], ['class' => 'text-info']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-success" style="border-radius: 10px 10px 0px 0px">
                        <h5>User</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $totalUser ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/admin/user/index'], ['class' => 'text-success']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-secondary" style="border-radius: 10px 10px 0px 0px">
                        <h5>Role</h5>
                    </div>
                    <div class="card-body text-center">
    
                        <p><?= $totalRole ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/admin/roles/index'], ['class' => 'text-secondary']); ?></h6>
            </div>
        </div>

        <div class="card border-secondary my-5" style="border-radius: 12px">
            <div class="card-body">
                <h1 class="mb-5 text-center">Pembangunan Terbaru : </h1>
                <div class="table-responsive text-center">
                <table class="table table-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembangunan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1?>
                    <?php foreach ($totalPembangunan as $item) {?>
                        <tr>
                            <th scope="row"><?= $nomor++ ?></th>
                            <td><?= $item->nama_pembangunan ?></td>
                            <td><?php if ($item->statusPembangunan->nama == 'Progress') { ?>
                                    <span class="badge badge-info"><?= $item->statusPembangunan->nama ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    <?php } ?>

    
    <?php if (Yii::$app->user->identity->roles_id == 7) { ?>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-primary" style="border-radius: 10px 10px 0px 0px">
                        <h5>Request Kegiatan</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $request ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/operator/request-pembangunan/index'], ['class' => 'text-primary']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-info" style="border-radius: 10px 10px 0px 0px">
                        <h5>Laporan Masalah</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $lapor ?></p>
                    </div>
                </div>      
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/operator/lapor-aduan/index'], ['class' => 'text-info']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-success" style="border-radius: 10px 10px 0px 0px">
                        <h5>Pembangunan</h5>
                    </div>
                    <div class="card-body text-center">
                        <p><?= $pembangunan ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/operator/pembangunan/index'], ['class' => 'text-success']); ?></h6>
            </div>
            <div class="col-lg-3">
                <div class="card card-responsive" style="border-radius: 10px; box-shadow: rgba(100,100,111, 0.2) 0px 7px 29px 0px">
                    <div class="card-header text-center bg-secondary" style="border-radius: 10px 10px 0px 0px">
                        <h5>Penduduk</h5>
                    </div>
                    <div class="card-body text-center">
    
                        <p><?= $penduduk ?></p>
                    </div>
                </div>
                <h6 class="my-3 text-center"><?= Html::a('Selengkapnya', ['/operator/penduduk/index'], ['class' => 'text-secondary']); ?></h6>
            </div>
        </div>

        <div class="card border-secondary my-5" style="border-radius: 12px">
            <div class="card-body">
                <h1 class="mb-5 text-center">Pembangunan Terbaru : </h1>
                <div class="table-responsive text-center">
                <table class="table table-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembangunan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1?>
                    <?php foreach ($totalPembangunan as $item) {?>
                        <tr>
                            <th scope="row"><?= $nomor++ ?></th>
                            <td><?= $item->nama_pembangunan ?></td>
                            <td><?php if ($item->statusPembangunan->nama == 'Progress') { ?>
                                    <span class="badge badge-info"><?= $item->statusPembangunan->nama ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
