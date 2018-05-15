<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180512_132554_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'description'=>$this->text(),
            'img'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
