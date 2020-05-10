<?php

namespace app\models;

use yii\db\ActiveRecord;
use yiibr\brvalidator\CpfValidator;

class Person extends ActiveRecord
{

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return '{{people}}';;
    }

    public function getbirthdateText()
    {
        return date('d/m/Y', $this->birthdate);
    }

    public function setbirthdateText($value)
    {
        $this->birthdate = strtotime($value);
    }
}