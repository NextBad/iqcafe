<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_product`.
 */
class m180512_132650_create_order_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_product', [
            'id' => $this->primaryKey(),
            'count'=>$this->smallInteger(),
            'price'=>$this->integer(),
            'order_id'=>$this->integer(),
            'product_id'=>$this->integer(),
        ]);
        $this->createIndex('order_id','order_product','order_id');
        $this->addForeignKey('order_id','order_product','order_id','order',
            'id','CASCADE');
        $this->createIndex('product_id','order_product','product_id');
        $this->addForeignKey('product_id','order_product','product_id','product',
            'id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_product');
    }
}
