<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alunos */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alunos-view">
    
    <?php if (Yii::$app->session->hasFlash('alunoCadastrado')): ?>

    <div class="alert alert-success">
        Aluno salvo com sucesso!
    </div>

    <?php endif ?>

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?php if (!Yii::$app->user->isGuest): ?>
            <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Tem certeza de que deseja excluir o aluno?',
                    'method' => 'post',
                ],
            ]) ?>
        <?php endif ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'email:email',
            'colegio',
            'serie',
        ],
    ]) ?>

</div>
