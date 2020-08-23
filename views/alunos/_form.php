<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alunos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alunos-form">

    <?php $form = ActiveForm::begin(); 
    ?>
    <div class="container">
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colegio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
