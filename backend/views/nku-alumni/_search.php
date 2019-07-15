<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuAlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku-alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alumi_id') ?>

    <?= $form->field($model, 'alumi_graduyear') ?>

    <?= $form->field($model, 'alumi_degree') ?>

    <?= $form->field($model, 'alumi_college') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
