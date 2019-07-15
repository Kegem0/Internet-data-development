<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NkuGuest */

$this->title = 'Create Nku Guest';
$this->params['breadcrumbs'][] = ['label' => 'Nku Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nku-guest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
