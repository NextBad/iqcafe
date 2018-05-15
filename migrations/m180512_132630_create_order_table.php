<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180512_132630_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'total'=>$this->integer(),
            'date'=>$this->date(),
            'user_id'=>$this->integer(),
        ]);
        $this->createIndex('user_id','order','user_id');
        $this->addForeignKey('user_id','order','user_id','user',
            'id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
