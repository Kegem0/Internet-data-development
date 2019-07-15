<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuTeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_workid') ?>

    <?= $form->field($model, 'teacher_name') ?>

    <?= $form->field($model, 'teacher_position') ?>

    <?= $form->field($model, 'teacher_college') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
