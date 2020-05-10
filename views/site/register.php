<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Nome') ?>
<?= $form->field($model, 'cpf')->label('CPF') ?>
<?= $form->field($model, 'phone')->label('Telefone') ?>
<?= $form->field($model, 'email')->label('E-mail') ?>
<?= $form->field($model, 'birthdate')->input('date')->label('Data de Nascimento') ?>
<?= $form->field($model, 'zipcode')->label('CEP') ?>
<?= $form->field($model, 'address')->label('Endereço') ?>
<?= $form->field($model, 'number')->label('Número') ?>
<?= $form->field($model, 'neighborhood')->label('Bairro') ?>
<?= $form->field($model, 'city')->label('Cidade') ?>
<?= $form->field($model, 'state')->label('Estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>