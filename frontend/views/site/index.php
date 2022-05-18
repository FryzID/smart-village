<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat datang di Smart Village</h1>
    </div>

    <div class="body-content">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Request Kegiatan</h2>

                    <p>Anda dapat memberi saran ataupun ide untuk kegiatan atau apapun yang terkait dengan desa </p>
                        
                    <?= Html::a('Beri Saran', ['request-pembangunan/create'], ['class' => 'btn btn-primary']); ?>
                </div>
                <div class="col-lg-4">
                    <h2>Lapor Masalah</h2>

                    <p>Anda dapat melaporkan masalah terkait kegiatan atau pembangunan desa yang sedang berlangsung</p>

                    <?= Html::a('Laporkan', ['list-pembangunan/index'], ['class' => 'btn btn-primary']); ?>
                </div>
                <div class="col-lg-4">
                    <h2>Pembangunan</h2>

                    <p>Berisi pembangunan - pembangunan yang sedang berlangsung di desa</p>

                    <?= Html::a('Lihat Sekarang', ['/pembangunan/index'], ['class' => 'btn btn-primary']); ?>
                </div>
            </div>
        </div>

        <div class="mt-5 col-lg-12">
            <div class="card border-primary" style="border-radius: 12px">
                <div class="card-body mb-5">
                    <h1 class="text-center mb-5">List Laporan yang telah di kirim : </h1> 

                    <div class="row">
                    <?php foreach ($lapor as $item) {?>
                        <?php if ($item->status == 'laporanbaru') { ?>
                        <div class="col-md-4">
                            <div class="card border-secondary card-responsive" style="border-radius: 15px">
                                <div class="card-body">
                                    <p>Deskripsi : <?= $item->deskripsi ?></p>
                                    <p>Dibuat pada : <?= $item->created_at ?></p>

                                    <span class="badge badge-secondary text-center">Status : <?= ucwords($item->status) ?></span>    
                                </div>
                            </div>
                        </div>                        
                        <?php } elseif ($item->status == 'diverifikasi') { ?>
                            <div class="col-md-4">
                            <div class="card border-success card-responsive" style="border-radius: 15px">
                                <div class="card-body">
                                    <p>Deskripsi : <?= $item->deskripsi ?></p>
                                    <p>Dibuat pada : <?= $item->created_at ?></p>

                                    <span class="badge badge-success text-center">Status : <?= ucwords($item->status) ?></span>                              
                                </div>
                            </div>
                        </div>
                        <?php } elseif ($item->status == 'dipending') { ?>
                            <div class="col-md-4">
                            <div class="card border-info card-responsive" style="border-radius: 15px">
                                <div class="card-body">
                                    <p>Deskripsi : <?= $item->deskripsi ?></p>
                                    <p>Dibuat pada : <?= $item->created_at ?></p>

                                    <span class="badge badge-info text-center">Status : <?= ucwords($item->status) ?></span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    <?php } ?>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="card border-secondary my-5" style="border-radius: 12px">
            <div class="card-body">
                <h1 class="mb-5 text-center">List Nama Kegiatan yang di minta : </h1>
                <div class="table-responsive text-center">
                <table class="table table-vcenter">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Waktu Kegiatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pembangunan as $item) {?>
                        <tr>
                            <th scope="row"><?= $item->id ?></th>
                            <td><?= $item->judul ?></td>
                            <td>-</td>
                            <td><?= $item->deskripsi ?></td>
                            <td>
                                <?php if ($item->statu == 'terverifikasi') { ?>
                                    <span class="badge badge-success"><?= ucwords($item->statu) ?></span>
                                <?php } elseif ($item->statu == 'ditindaklanjuti') { ?>
                                    <span class="badge badge-info"><?= ucwords($item->statu) ?></span>
                                <?php } elseif ($item->statu == 'requestbaru') { ?>
                                    <span class="badge badge-secondary"><?= ucwords($item->statu) ?></span>
                                <?php } ?>
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
