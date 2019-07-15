<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuNewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'news_date') ?>

    <?= $form->field($model, 'news_num') ?>

    <?= $form->field($model, 'news_headline') ?>

    <?= $form->field($model, 'news_ifpassed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
