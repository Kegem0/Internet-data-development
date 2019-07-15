<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuOrganization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organi_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
