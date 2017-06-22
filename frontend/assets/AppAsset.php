<?php



namespace frontend\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
  //  public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/Eshop/';
    public $css = [
        'css/bootstrap.min.css',
         'css/font-awesome.min.css',
          'css/prettyPhoto.css',
           'css/price-range.css',
            'css/animate.css',
             'css/main.css',
             'css/responsive.css',

  //       'css/materialize.min.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.scrollUp.min.js',
        'js/price-range.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js',

         //... another js files
//    'js/materialize.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'macgyer\yii2materializecss\assets\MaterializeAsset',
    ];
}

  
