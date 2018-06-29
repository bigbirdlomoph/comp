<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_month_approve}}".
 *
 * @property integer $id
 * @property string $month_name
 * @property string $month_mm
 */
class ComMonthApprove extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%com_month_approve}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['month_name'], 'string', 'max' => 50],
            [['month_mm'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'รหัส'),
            'month_name' => Yii::t('app', 'เดือน'),
            'month_mm' => Yii::t('app', 'รหัสเดือน'),
        ];
    }
}
