<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JoinTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="join-teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_workid')->textInput() ?>

    <?= $form->field($model, 'activity_date')->textInput() ?>

    <?= $form->field($model, 'activity_num')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
