<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ComHardware62]].
 *
 * @see ComHardware62
 */
class ComHardware62Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ComHardware62[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ComHardware62|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
