<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pupil */

$this->title = 'Update Pupil: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pupils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pupil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
