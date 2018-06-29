<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_money_source}}".
 *
 * @property integer $id
 * @property string $ms_code
 * @property string $ms_name
 */
class ComMoneySource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%com_money_source}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['ms_code'], 'string', 'max' => 2],
            [['ms_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ms_code' => Yii::t('app', 'รหัสแหล่งเงิน'),
            'ms_name' => Yii::t('app', 'แหล่งเงิน'),
        ];
    }
}
