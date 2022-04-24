<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m220418_060604_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'email'=>$this->string(255)->notNull(),
            'country'=>$this->string(255)->notNull(),
            'state'=>$this->string(255)->notNull(),
            'text'=>$this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
