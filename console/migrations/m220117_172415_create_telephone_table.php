<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%telephone}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%telephone_company}}`
 */
class m220117_172415_create_telephone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telephone}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer()->notNull(),
            'company_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'amount' => $this->integer()->notNull(),
            'description' => $this->string()->notNull(),
            'display_size' => $this->string()->notNull(),
            'image' => $this->string()->notNull(),
        ]);

        // creates index for column `company_id`
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%telephone_company}}`
        

        $this->dropTable('{{%telephone}}');
    }
}
