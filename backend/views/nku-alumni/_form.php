<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuAlumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alumi_id')->textInput() ?>

    <?= $form->field($model, 'alumi_graduyear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumi_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumi_college')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
