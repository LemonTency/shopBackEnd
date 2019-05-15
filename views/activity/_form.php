<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'store')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timeStart')->textInput() ?>

    <?= $form->field($model, 'timeEnd')->textInput() ?>

    <?= $form->field($model, 'activityDetail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activitySales')->textInput() ?>

    <?= $form->field($model, 'is_del')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
