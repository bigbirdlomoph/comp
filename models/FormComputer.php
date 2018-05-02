<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%form_computer}}".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $year_budget
 * @property string $money_source
 * @property string $hoscode
 * @property string $cupcode
 * @property string $hw_id
 * @property string $procurement
 * @property string $location_ins
 * @property string $quantity
 * @property string $old_hw_name
 * @property string $post_old_hw
 * @property string $year_install
 * @property string $problem
 * @property string $description_hw
 * @property string $workload_hw
 * @property string $it_staff
 */
class FormComputer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%form_computer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'year_budget', 'year_month', 'hoscode', 'hw_id', 'quantity', 'price', 'new_hw', 'replace_hw'], 'required'],
            [['project_name', 'note'], 'string', 'max' => 255],
            [['year_budget', 'distid', 'year_install'], 'string', 'max' => 4],
            [['hospcode', 'cupcode', 'hw_id', 'quantity', 'new_hw', 'replace_hw'], 'string', 'max' => 5],
            // [['money_source'], 'string', 'max' => 1],
            [['year_month'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสลับ',
            'project_name' => 'ชื่อโครงการ',
            'year_budget' => 'ปีงบประมาณ',
            'year_month' => 'ปี-เดือน ขออนุมัติ (2018-02)',
            'hoscode' => 'รหัสหน่วยบริการ 5 หลัก',
            'cupcode' => 'รหัสเครือข่ายบริการ 5 หลัก',
            'distid' => 'รหัสอำเภอ',
            'hw_id' => 'รหัสอุปกรณ์คอมพิวเตอร์',
            'quantity' => 'จำนวน (ชุด)',
            'price' => 'ราคาต่อหน่วย',
            'sum_price' => 'ราคารวมต่อหน่วย',
            'new_hw' => 'จัดหาใหม่ (จำนวน)',
            'replace_hw' => 'ทดแทน (จำนวน)',
            'year_install' => 'ปีที่ติดตั้ง (กรณีซื้อทดแทน)',
            'note' => 'หมายเหตุ',
        ];
    }
}
