<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ComHardware]].
 *
 * @see ComHardware
 */
class ComHardwareQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ComHardware[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ComHardware|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
