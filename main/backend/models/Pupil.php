<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pupil".
 *
 * @property int $id
 * @property string $name ФИО
 */
class Pupil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pupil';
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
            'name' => 'ФИО',
        ];
    }

    /**
     * @inheritdoc
     * @return PupilQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PupilQuery(get_called_class());
    }
}
