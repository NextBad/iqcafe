<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180512_132613_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'price'=>$this->integer(),
            'is_available'=>$this->boolean(),
            'img'=>$this->string(),
            'cat_id'=>$this->integer(),
        ]);
        $this->createIndex('cat_id','product','cat_id');
        $this->addForeignKey('cat_id','product','cat_id','category',
            'id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
