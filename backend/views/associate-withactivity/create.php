<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AssociateWithactivity */

$this->title = 'Create Associate Withactivity';
$this->params['breadcrumbs'][] = ['label' => 'Associate Withactivities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="associate-withactivity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
