<?php

use yii\db\Migration;

/**
 * Handles the creation of table `home`.
 */
class m190214_181853_create_home_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('home', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer()->notNull(),
            'davlat_id'=>$this->integer()->notNull(),
            'viloyat_id'=>$this->integer()->notNull(),
            'tuman_id'=>$this->integer()->notNull(),
            'name'=>$this->string(255)->notNull(),
            'cost'=>$this->string(255)->notNull(),
            'full_ground'=>$this->string(255)->Null(),
            'live_ground'=>$this->string(255)->notNull(),
            'room_id'=>$this->integer()->notNull(),
            'floor_id'=>$this->integer()->Null(),
            'full_floor' => $this->integer()->Null(),
            'build_product' => $this->string(255)->notNull(),
            'status_home' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'tell' => $this->integer()->notNull(),
            'video_cam' => $this->integer()->notNull(),
            'cable' => $this->integer()->notNull(),
            'tv'=>$this->integer()->notNull(),
            'muzlatgich'=>$this->integer()->notNull(),
            'candinsaner'=>$this->integer()->notNull(),
            'fio'=>$this->string(255)->notNull(),
            'm_tel'=>$this->string(255)->notNull(),
            'm_email'=>$this->string(255)->notNull(),
            'image'=>$this->string(255)->notNull(),
        ]);
        $this->addForeignKey(
            'category_home',
            'home',
            'category_id',
            'category',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'davlat_home',
            'home',
            'davlat_id',
            'davlat',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'viloyat_home',
            'home',
            'viloyat_id',
            'viloyat',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'tuman_home',
            'home',
            'tuman_id',
            'tuman',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('home');
    }
}
