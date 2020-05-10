<?php

/* @var $this yii\web\View */

$this->title = 'SOS Vagas';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Seja bem vindo!</h1>

        <p class="lead">Esse é o <?= Yii::$app->name ?>.</p>

        <p><a class="btn btn-lg btn-info" href="<?= \yii\helpers\Url::toRoute('/person') ?>">Abrir sistema de
                Cadastro</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Sobre</h2>
                <p> Esse sistema foi desenvolvido para realização do teste prático para vaga de Analista de TI do
                    PagMenos.</p>
                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::toRoute('about') ?>">Saiba mais &raquo;</a>
                </p>
            </div>
        </div>

    </div>
</div>
