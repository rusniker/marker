<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mark_ref".
 *
 * @property int $id
 * @property int $mark_tmp_ref_id id шаблона оценок
 * @property int $value Оценка
 * @property string $name Обозначение оценки
 * @property string $color Цвет
 * @property string $type
 * @property int $min Минимальное значение интервала
 * @property int $max Максимальное значение интервала
 */
class MarkRef extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark_ref';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mark_tmp_ref_id', 'name', 'color'], 'required'],
            [['mark_tmp_ref_id', 'value', 'min', 'max'], 'integer'],
            [['type'], 'string'],
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
            'mark_tmp_ref_id' => 'id шаблона оценок',
            'value' => 'Оценка',
            'name' => 'Обозначение оценки',
            'color' => 'Цвет',
            'type' => 'Type',
            'min' => 'Минимальное значение интервала',
            'max' => 'Максимальное значение интервала',
        ];
    }

    /**
     * @inheritdoc
     * @return MarkRefQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MarkRefQuery(get_called_class());
    }
}
