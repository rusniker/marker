<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mark`.
 */
class m180312_184847_create_mark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $this->createTable('mark', [
		    'id' => $this->primaryKey(),
		    'pupil_id' => $this->integer(11)->notNull()->comment('id Ученика'),
		    'topic_id' => $this->integer(11)->notNull()->comment('id Темы'),
		    'subject_id' => $this->integer(11)->notNull()->comment('id Предмета'),
		    'date' => $this->integer(11)->notNull()->comment('Дата'),
		    'value' => $this->tinyInteger(1)->notNull()->defaultValue(0)->comment('Оценка'),
		    'name' => $this->string(255)->notNull()->comment('Обозначение оценки'),
		    'color' => $this->string(63)->notNull()->comment('Цвет'),
	    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mark');
    }
}
