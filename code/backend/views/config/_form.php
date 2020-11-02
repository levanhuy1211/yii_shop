<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Config */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cf_site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cf_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cf_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cf_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cf_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cf_about')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_face')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_shopee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_larada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_tiki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_zalo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
