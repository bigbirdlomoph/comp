<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[FormComReport]].
 *
 * @see FormComReport
 */
class FormComReportQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return FormComReport[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FormComReport|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
