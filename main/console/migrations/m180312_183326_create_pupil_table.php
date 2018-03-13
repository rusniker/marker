<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pupil`.
 */
class m180312_183326_create_pupil_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pupil', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('ФИО'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pupil');
    }
}
