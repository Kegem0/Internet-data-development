<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UndertakenByorgani */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="undertaken-byorgani-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organi_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_date')->textInput() ?>

    <?= $form->field($model, 'activity_num')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
