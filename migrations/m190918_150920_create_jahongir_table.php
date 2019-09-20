<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jahongir}}`.
 */
class m190918_150920_create_jahongir_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jahongir}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jahongir}}');
    }
}
