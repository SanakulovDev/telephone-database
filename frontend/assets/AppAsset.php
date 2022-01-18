<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "template/bootstrap/bootstrap.min.css",
        "template/select2/select2.min.css",
        "template/owlcarousel/owl.carousel.min.css",
        "template/lightcase/lightcase.css",
        "https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" ,
        "https://cdn.linearicons.com/free/1.0.0/icon-font.min.css",
        "https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700",
        "template/icons/css/style.min.css"

    ];
    public $js = [
        "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js",
        "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js",
        "template/bootstrap/popper.min.js",
        "template/bootstrap/bootstrap.min.js",
        "template/select2/select2.min.js ",
        "template/owlcarousel/owl.carousel.min.js",
        "template/isotope/isotope.min.js",
        "template/lightcase/lightcase.js",
        "template/waypoints/waypoint.min.js",
        "template/countTo/jquery.countTo.js",
        "template/app.min.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
