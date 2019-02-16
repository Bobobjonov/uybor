<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tuman`.
 */
class m190214_181721_create_tuman_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tuman', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tuman');
    }
}
