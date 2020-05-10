<?php
use yii\helpers\Html;
?>
<h1>Registro efetuado com sucesso</h1>
<p>Dados principais da pessoa salva:</p>

<ul>
    <li><label>Nome</label>: <?= Html::encode($model->name) ?></li>
    <li><label>E-mail</label>: <?= Html::encode($model->cpf) ?></li>
    <li><label>E-mail</label>: <?= Html::encode($model->email) ?></li>
    <li><label>E-mail</label>: <?= Html::encode($model->phone) ?></li>
    <?= Html::submitButton('Voltar', ['class' => 'btn btn-primary', 'onClick'=>'']) ?>
</ul>
