<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $id
 * @property int $subject_id id Предмета
 * @property int $date Дата
 * @property string $name Обозначение оценки
 * @property int $mark_template_ref_id id Шаблона оценок
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id', 'date', 'name', 'mark_template_ref_id'], 'required'],
            [['subject_id', 'date', 'mark_template_ref_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_id' => 'Предмет',
            'subject' => 'Предмет',
            'date' => 'Дата',
            'name' => 'Название темы/урока',
            'mark_template_ref_id' => 'id Шаблона оценок',
        ];
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSubject()
	{
		return $this->hasOne(Subject::class,['id' => 'subject_id']);
	}


    /**
     * @inheritdoc
     * @return TopicQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TopicQuery(get_called_class());
    }
}
