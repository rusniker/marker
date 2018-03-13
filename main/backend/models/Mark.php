<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mark".
 *
 * @property int $id
 * @property int $pupil_id id Ученика
 * @property int $topic_id id Темы
 * @property int $subject_id id Предмета
 * @property int $date Дата
 * @property int $value Оценка
 * @property string $name Обозначение оценки
 * @property string $color Цвет
 */
class Mark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pupil_id', 'topic_id', 'subject_id', 'date', 'name', 'color'], 'required'],
            [['pupil_id', 'topic_id', 'subject_id', 'date'], 'integer'],
            [['value'], 'string', 'max' => 1],
            [['name'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 63],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pupil_id' => 'id Ученика',
            'topic_id' => 'id Темы',
            'subject_id' => 'id Предмета',
            'date' => 'Дата',
            'value' => 'Оценка',
            'name' => 'Обозначение оценки',
            'color' => 'Цвет',
        ];
    }

    /**
     * @inheritdoc
     * @return MarkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MarkQuery(get_called_class());
    }
}
