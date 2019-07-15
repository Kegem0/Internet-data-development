<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuGuest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-guest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'guest_id')->textInput() ?>

    <?= $form->field($model, 'guest_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guest_job')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
