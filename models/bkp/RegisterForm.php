<?php


namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;
use yiibr\brvalidator\CpfValidator;

class RegisterForm extends Model
{

    public $name;
    public $cpf;
    public $birthdate;
    public $email;
    public $phone;
    public $address;
    public $number;
    public $neighborhood;
    public $state;
    public $city;
    public $zipcode;
    public $created_at;
    public $updated_at;
    public $deleted_at;

    public function rules()
    {
        return [
            ['name', 'required'],
            ['email', 'email'],
            ['cpf', CpfValidator::class],
            ['phone', 'number'],
            ['birthdate', 'string'],
            ['address', 'string'],
            ['number', 'string'],
            ['neighborhood', 'string'],
            ['state', 'string'],
            ['city', 'string'],
            ['zipcode', 'number'],
        ];
    }

}