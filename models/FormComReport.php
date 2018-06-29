<?php

namespace app\models;

use Yii;
use app\models\ComHardware;

/**
 * This is the model class for table "{{%form_com_report}}".
 *
 * @property integer $id
 * @property string $hoscode
 * @property string $hw_id
 * @property string $hw_detail
 * @property string $report
 * @property string $recognize
 * @property string $allocate
 * @property integer $qty
 * @property string $unit
 * @property string $summary
 * @property string $company
 * @property string $brand
 * @property string $reference
 */
class FormComReport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%form_com_report}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoscode', 'hw_id', 'hw_detail', 'report', 'recognize', 'allocate', 'qty', 'summary', 'company', 'brand', 'reference', 'year_budget', 'project_name'], 'required'],
            [['qty'], 'integer'],
            [['hoscode'], 'string', 'max' => 5],
            [['hw_id', 'year_budget'], 'string', 'max' => 4],
            [['hw_detail', 'project_name'], 'string', 'max' => 100],
            [['report', 'recognize', 'allocate'], 'string', 'max' => 10],
            [['unit'], 'string', 'max' => 50],
            [['summary'], 'string', 'max' => 12],
            [['company', 'brand', 'reference'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ลำดับ'),
            'hoscode' => Yii::t('app', 'หน่วยบริการ'),
            'hw_id' => Yii::t('app', 'ครุภัณฑ์คอมพิวเตอร์'),
            'year_budget' => Yii::t('app', 'ปีงบประมาณ'),
            'project_name' => Yii::t('app', 'ชื่อโครงการ'),
            'hw_detail' => Yii::t('app', 'รายละเอียดครุภัณฑ์คอมพิวเตอร์'),
            'report' => Yii::t('app', 'ที่รายงาน'),
            'recognize' => Yii::t('app', 'ที่ คกก.รับทราบ'),
            'allocate' => Yii::t('app', 'ที่จัดสรรได้จริง'),
            'qty' => Yii::t('app', 'จำนวน'),
            'unit' => Yii::t('app', 'หน่วย'),
            'summary' => Yii::t('app', 'มูลค่ารวม'),
            'company' => Yii::t('app', 'ผู้จำน่าย/บริษัท/ห้างร้าน'),
            'brand' => Yii::t('app', 'รุ่น/ยี่ห้อ'),
            'reference' => Yii::t('app', 'อ้างถึง ลย.'),
        ];
    }

    /**
     * @inheritdoc
     * @return FormComReportQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FormComReportQuery(get_called_class());
    }

    //เพิ่มส่วนของการเอาค่า hw_detail เขียนลงตาราง
    //public function getHwDetail($id)
    //{
    //    return $this->hasOne(ComHardware::className(), ['hw_id' => $id]);
    //}
}
