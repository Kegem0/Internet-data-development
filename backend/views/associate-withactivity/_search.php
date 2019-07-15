<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AssociateWithactivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="associate-withactivity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activity_date') ?>

    <?= $form->field($model, 'activity_num') ?>

    <?= $form->field($model, 'news_date') ?>

    <?= $form->field($model, 'news_num') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
