<?php

namespace app\models;

use Yii;
use yiibr\brvalidator\CpfValidator;

/**
 * This is the model class for table "people".
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdate'], 'date', 'format' => 'php:Y-m-d'],
            [['name'], 'string', 'max' => 255],
            [['cpf', 'phone'], 'string', 'max' => 11],
            [['cpf', 'phone', 'email', 'birthdate', 'name'], 'required'],
            ['email', 'email'],
            [['address', 'neighborhood', 'state', 'zipcode'], 'string', 'max' => 100],
            [['number'], 'string', 'max' => 20],
            [['zipcode'], 'number'],
            [['city'], 'string', 'max' => 9],
            [['cpf'], 'unique'],
            [['cpf'], CpfValidator::class],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'cpf' => 'CPF',
            'birthdate' => 'Data de Nascimento',
            'email' => 'E-mail',
            'phone' => 'Telefone',
            'address' => 'Endereço',
            'number' => 'Número',
            'neighborhood' => 'Bairro',
            'state' => 'UF',
            'city' => 'Cidade',
            'zipcode' => 'CEP',
        ];
    }

}
