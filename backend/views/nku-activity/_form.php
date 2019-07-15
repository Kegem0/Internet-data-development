<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activity_date')->textInput() ?>

    <?= $form->field($model, 'activity_num')->textInput() ?>

    <?= $form->field($model, 'activity_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
