<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditByadmin */

$this->title = 'Update Audit Byadmin: ' . $model->admin_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Byadmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->admin_id, 'url' => ['view', 'admin_id' => $model->admin_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-byadmin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
