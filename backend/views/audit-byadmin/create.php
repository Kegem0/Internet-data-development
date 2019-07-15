<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditByadmin */

$this->title = 'Create Audit Byadmin';
$this->params['breadcrumbs'][] = ['label' => 'Audit Byadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-byadmin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
