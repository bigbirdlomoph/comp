<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "com_hardware".
 *
 * @property integer $id
 * @property string $hw_id
 * @property string $hardware_detail
 * @property string $price
 * @property string $unit
 * @property string $hw_group_id
 * @property string $hw_detail_id
 */
class ComHardware extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_hardware';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hw_id'], 'required'],
            [['price'], 'number'],
            [['hw_id'], 'string', 'max' => 5],
            [['hw_detail'], 'string', 'max' => 255],
            [['unit'], 'string', 'max' => 50],
            [['hw_group_id', 'hw_detail_id'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hw_id' => 'รหัสครุภัณฑ์',
            'hw_detail' => 'ครุภัณฑ์คอมพิวเตอร์',
            'price' => 'ราคากลาง',
            'unit' => 'หน่วย',
            'hw_group_id' => 'รหัสกลุ่มครุภัณฑ์',
            'hw_detail_id' => 'รหัสรายละเอียดครุภัณฑ์',
        ];
    }

    /**
     * @inheritdoc
     * @return ComHardwareQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComHardwareQuery(get_called_class());
    }

    //public $hw_id;
}
