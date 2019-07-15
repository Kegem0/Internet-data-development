<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WriteBystu */

$this->title = 'Create Write Bystu';
$this->params['breadcrumbs'][] = ['label' => 'Write Bystus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="write-bystu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
