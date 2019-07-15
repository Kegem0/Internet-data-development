<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuActivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activity_date') ?>

    <?= $form->field($model, 'activity_num') ?>

    <?= $form->field($model, 'activity_name') ?>

    <?= $form->field($model, 'activity_type') ?>

    <?= $form->field($model, 'activity_position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
