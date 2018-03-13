<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mark_template_ref".
 *
 * @property int $id
 * @property string $name Название шаблона оценок
 */
class MarkTemplateRef extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark_template_ref';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'name' => 'Название шаблона оценок',
        ];
    }

    /**
     * @inheritdoc
     * @return MarkTemplateRefQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MarkTemplateRefQuery(get_called_class());
    }
}
