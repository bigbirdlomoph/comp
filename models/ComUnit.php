<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_unit}}".
 *
 * @property integer $id
 * @property string $unit_id
 * @property string $unit_name
 */
class ComUnit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%com_unit}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit_id'], 'string', 'max' => 4],
            [['unit_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'unit_id' => Yii::t('app', 'รหัสหน่วยนับ'),
            'unit_name' => Yii::t('app', 'ชื่อหน่วยนับ'),
        ];
    }

    /**
     * @inheritdoc
     * @return ComUnitQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComUnitQuery(get_called_class());
    }
}
