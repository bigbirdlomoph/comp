<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_brand}}".
 *
 * @property integer $id
 * @property string $brand_id
 * @property string $brand_name
 */
class ComBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%com_brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id'], 'string', 'max' => 4],
            [['brand_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'brand_id' => Yii::t('app', 'รหัสยี่ห้อ'),
            'brand_name' => Yii::t('app', 'ยี่ห้อ'),
        ];
    }

    /**
     * @inheritdoc
     * @return ComBrandQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComBrandQuery(get_called_class());
    }
}
