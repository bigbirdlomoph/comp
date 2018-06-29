<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ComBrand]].
 *
 * @see ComBrand
 */
class ComBrandQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ComBrand[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ComBrand|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
