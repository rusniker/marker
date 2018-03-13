<?php

use yii\db\Migration;

/**
 * Handles the creation of table `topic`.
 */
class m180312_183656_create_topic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('topic', [
            'id' => $this->primaryKey(),
            'subject_id' => $this->integer(11)->notNull()->comment('id Предмета'),
            'date' => $this->integer(11)->notNull()->comment('Дата'),
	        'name' => $this->string(255)->notNull()->comment('Обозначение оценки'),
	        'mark_template_ref_id' => $this->integer(11)->notNull()->comment('id Шаблона оценок'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('topic');
    }
}
