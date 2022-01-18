<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%telephone_types}}`.
 */
class m220117_171308_create_telephone_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telephone_types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%telephone_types}}');
    }
}
