<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MarkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mark-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pupil_id') ?>

    <?= $form->field($model, 'topic_id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'value') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'color') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
