<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;

class HeaderSticky extends Widget{
    public $message;

    public function init(){
        parent::init();
    }

    public function run(){
        $category = new Category();
        $dataCat = $category->getAllRoot();
        return $this->render('headerSticky',['dataCat'=>$dataCat]);
    }
}
