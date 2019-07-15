<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuVolunteer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-volunteer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'volunteer_id')->textInput() ?>

    <?= $form->field($model, 'volunteer_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
