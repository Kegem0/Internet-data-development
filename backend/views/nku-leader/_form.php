<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuLeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-leader-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'leader_id')->textInput() ?>

    <?= $form->field($model, 'leader_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leader_unit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
