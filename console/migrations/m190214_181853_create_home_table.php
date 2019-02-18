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
            'country_id'=>$this->integer()->notNull(),
            'region_id'=>$this->integer()->notNull(),
            'district_id'=>$this->integer()->notNull(),
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
            'country_home',
            'home',
            'country_id',
            'country',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'region_home',
            'home',
            'region_id',
            'region',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'district_home',
            'home',
            'district_id',
            'district',
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
