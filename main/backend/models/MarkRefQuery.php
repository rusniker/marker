<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[MarkRef]].
 *
 * @see MarkRef
 */
class MarkRefQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MarkRef[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MarkRef|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
