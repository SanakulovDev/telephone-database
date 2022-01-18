<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%telephone_company}}`.
 */
class m220117_171326_create_telephone_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telephone_company}}', [
            'id' => $this->primaryKey(),
            'region' => $this->string()->notNull(),
            'company_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%telephone_company}}');
    }
}
