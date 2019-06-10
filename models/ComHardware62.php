<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_hardware_62}}".
 *
 * @property int $id
 * @property string $hw_id รหัสครุภัณฑ์
 * @property string $hw_detail ครุภัณฑ์คอมพิวเตอร์
 * @property string $price ราคากลาง
 * @property string $unit หน่วย
 * @property string $hw_group_id รหัสกลุ่มครุภัณฑ์
 * @property string $hw_detail_id รหัสรายละเอียดครุภัณฑ์
 */
class ComHardware62 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%com_hardware_62}}';
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
 
}
