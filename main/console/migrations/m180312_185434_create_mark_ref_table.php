<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mark_ref`.
 */
class m180312_185434_create_mark_ref_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mark_ref', [
            'id' => $this->primaryKey(),
            'mark_tmp_ref_id' => $this->integer(11)->notNull()->comment('id шаблона оценок'),
            'value' => $this->smallInteger(1)->notNull()->defaultValue(0)->comment('Оценка'),
            'name' => $this->string(255)->notNull()->comment('Обозначение оценки'),
	        'color' => $this->string(63)->notNull()->comment('Цвет'),
	        'type' => "ENUM('list', 'interval') NOT NULL DEFAULT 'list'",
	        'min' => $this->integer(11)->comment('Минимальное значение интервала'),
	        'max' => $this->integer(11)->comment('Максимальное значение интервала'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mark_ref');
    }
}
