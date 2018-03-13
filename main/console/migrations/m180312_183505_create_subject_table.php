<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subject`.
 */
class m180312_183505_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subject', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Название предмета'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subject');
    }
}
