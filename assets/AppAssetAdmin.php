<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.05.2018
 * Time: 13:51
 */

namespace app\assets;
use yii\web\AssetBundle;

class AppAssetAdmin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}