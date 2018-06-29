<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ComUnit]].
 *
 * @see ComUnit
 */
class ComUnitQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ComUnit[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ComUnit|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
