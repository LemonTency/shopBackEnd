<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'actId') ?>

    <?= $form->field($model, 'store') ?>

    <?= $form->field($model, 'activity') ?>

    <?= $form->field($model, 'imgUrl') ?>

    <?= $form->field($model, 'timeStart') ?>

    <?php // echo $form->field($model, 'timeEnd') ?>

    <?php // echo $form->field($model, 'activityDetail') ?>

    <?php // echo $form->field($model, 'activitySales') ?>

    <?php // echo $form->field($model, 'is_del') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
