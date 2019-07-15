<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuAdmin */

$this->title = 'Create Nku Admin';
$this->params['breadcrumbs'][] = ['label' => 'Nku Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
