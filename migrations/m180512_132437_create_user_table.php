<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180512_132437_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email'=>$this->string(),
            'password'=>$this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
