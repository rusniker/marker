<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MarkTemplateRef */

$this->title = 'Create Mark Template Ref';
$this->params['breadcrumbs'][] = ['label' => 'Mark Template Refs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-template-ref-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
