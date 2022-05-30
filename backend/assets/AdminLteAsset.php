<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminLTE/plugins/fontawesome-free/css/all.min.css',
        'adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminLTE/plugins/jqvmap/jqvmap.min.css',
        'adminLTE/dist/css/adminlte.min.css',
        'adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'adminLTE/plugins/daterangepicker/daterangepicker.css',
        'adminLTE/plugins/summernote/summernote-bs4.min.css',
        'bootstrap-iconpicker/dist/css/bootstrap-iconpicker.css',      
        'bootstrap-iconpicker/dist/css/bootstrap-iconpicker.min.css',
        'fontawesome/css/all.css',
    ];
    public $js = [
        'adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminLTE/plugins/chart.js/Chart.min.js',
        'adminLTE/plugins/sparklines/sparkline.js',
        'adminLTE/plugins/jqvmap/jquery.vmap.min.js',
        'adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'adminLTE/plugins/jquery-knob/jquery.knob.min.js',
        'adminLTE/plugins/moment/moment.min.js',
        'adminLTE/plugins/daterangepicker/daterangepicker.js',
        'adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminLTE/plugins/summernote/summernote-bs4.min.js',
        'adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'adminLTE/dist/js/adminlte.js',
        'adminLTE/dist/js/demo.js',
        'adminLTE/dist/js/pages/dashboard.js',
        'bootstrap-iconpicker/dist/js/bootstrap-iconpicker-iconset-all.js',
        'bootstrap-iconpicker/dist/js/bootstrap-iconpicker-iconset-all.min.js',
        'bootstrap-iconpicker/dist/js/bootstrap-iconpicker.bundle.min.js',
        'bootstrap-iconpicker/dist/js/bootstrap-iconpicker.js',
        'bootstrap-iconpicker/dist/js/bootstrap-iconpicker.min.js',
        'fontawesome/js/all.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
