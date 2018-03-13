<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Pupil]].
 *
 * @see Pupil
 */
class PupilQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Pupil[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pupil|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
