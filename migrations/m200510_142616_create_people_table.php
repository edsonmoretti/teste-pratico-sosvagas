<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%people}}`.
 */
class m200510_142616_create_people_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%people}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'cpf' => $this->string(11)->notNull()->unique(),
            'birthdate' => $this->date()->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(11),
            'address' => $this->string(255),
            'number' => $this->string(20),
            'neighborhood' => $this->string(100),
            'state' => $this->string(100),
            'city' => $this->string(100),
            'zipcode' => $this->string(9),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%people}}');
    }
}
