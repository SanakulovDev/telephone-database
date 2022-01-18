<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%partners}}`.
 */
class m220117_171414_create_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%partners}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'region' => $this->string()->notNull(),
            'image' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%partners}}');
    }
}
