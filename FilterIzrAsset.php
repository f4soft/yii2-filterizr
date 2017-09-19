<?php
namespace f4soft\yii2FilterIzr;
use yii\web\AssetBundle;
/**
 * Class FilterIzrAsset
 * @package f4soft\yii2FilterIzr
 */
class FilterIzrAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/filterizr.js';
    /**
     * @var array
     */
    public $css = [
    ];
    /**
     * @var array
     */
    public $js = [
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset'
    ];
}