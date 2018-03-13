<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[MarkTemplateRef]].
 *
 * @see MarkTemplateRef
 */
class MarkTemplateRefQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MarkTemplateRef[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MarkTemplateRef|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
