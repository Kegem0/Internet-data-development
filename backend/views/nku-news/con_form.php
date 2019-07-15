<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_date')->textInput() ?>

    <?= $form->field($model, 'news_num')->textInput() ?>

    <?= $form->field($model, 'news_headline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_ifpassed')->textInput(['readonly'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
