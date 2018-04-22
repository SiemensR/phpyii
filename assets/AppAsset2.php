<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset2 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'css/site2.css',
    'http://wingman.mediumra.re/assets/css/theme.css',
    ];
    public $js = [
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
