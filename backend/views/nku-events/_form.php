<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuEvents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'events_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
