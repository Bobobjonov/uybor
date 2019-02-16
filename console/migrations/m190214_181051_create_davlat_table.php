<?php

use yii\db\Migration;

/**
 * Handles the creation of table `davlat`.
 */
class m190214_181051_create_davlat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('davlat', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('davlat');
    }
}
