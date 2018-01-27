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
            [['project_name', 'year_budget', 'money_source', 'hoscode', 'hw_id', 'procurement'], 'required'],
            [['project_name', 'location_ins', 'old_hw_name', 'post_old_hw', 'problem', 'description_hw', 'workload_hw', 'it_staff'], 'string', 'max' => 255],
            [['year_budget', 'year_install'], 'string', 'max' => 4],
            [['money_source'], 'string', 'max' => 1],
            [['hoscode', 'cupcode', 'hw_id', 'procurement', 'quantity'], 'string', 'max' => 5],
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
            'money_source' => 'แหล่งเงินงบประมาณ',
            'hoscode' => 'หน่วยบริการ',
            'cupcode' => 'เครือข่ายบริการ',
            'hw_id' => 'รหัสอุปกรณ์คอมพิวเตอร์',
            'procurement' => 'วิธีการจัดหา',
            'location_ins' => 'สถานที่ติดตั้งครุภัณฑ์',
            'quantity' => 'จำนวน (ชุด)',
            'old_hw_name' => 'ครุภัณฑ์คอมพิวเตอร์เดิมที่มีอยู่',
            'post_old_hw' => 'สถานที่ติดตั้งครุภัณฑ์เดิม',
            'year_install' => 'ปีที่ติดตั้ง',
            'problem' => 'ปัญหาอุปสรรคในการปฏิบัติงาน',
            'description_hw' => 'ลักษณะงานหรือระบบงานที่จะใช้กับอุปกรณ์',
            'workload_hw' => 'เปรียบเทียบอุปกรณ์ที่จัดหาในครั้งนี้กับปริมาณงาน',
            'it_staff' => 'บุคลากรด้านคอมพิวเตอร์หรือบุคลากรที่ได้รับมอบหมาย',
        ];
    }
}
