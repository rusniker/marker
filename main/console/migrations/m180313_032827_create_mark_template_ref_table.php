<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mark_template_ref`.
 */
class m180313_032827_create_mark_template_ref_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mark_template_ref', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Название шаблона оценок'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mark_template_ref');
    }
}
