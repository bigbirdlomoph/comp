<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%co_office}}".
 *
 * @property string $off_id รหัสหน่วยบริการ
 * @property string $off_name ชื่อหน่วยบริการ
 * @property string $off_type ประเภทหน่วยบริการ
 * @property string $provid รหัสจังหวัด
 * @property string $distname ชื่ออำเภอ
 * @property string $distid รหัสอำเภอ
 * @property string $subdistid รหัสตำบล
 * @property string $villid รหัสหมู่บ้าน
 * @property string $villno
 * @property string $postcode รหัสไปรษณีย์
 * @property string $cup_name คปสอ.
 * @property string $cup_code
 * @property string $pcu_code
 * @property string $pointx
 * @property string $pointy
 * @property string $status
 * @property string $updatedate
 */
class CoOffice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%co_office}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['off_id'], 'required'],
            [['updatedate'], 'safe'],
            [['off_id', 'postcode', 'cup_code', 'pcu_code'], 'string', 'max' => 5],
            [['off_name', 'distname', 'cup_name'], 'string', 'max' => 100],
            [['off_type', 'provid', 'villno'], 'string', 'max' => 2],
            [['distid'], 'string', 'max' => 4],
            [['subdistid'], 'string', 'max' => 6],
            [['villid'], 'string', 'max' => 8],
            [['pointx', 'pointy'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 1],
            [['off_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'off_id' => Yii::t('app', 'รหัสหน่วยบริการ'),
            'off_name' => Yii::t('app', 'ชื่อหน่วยบริการ'),
            'off_type' => Yii::t('app', 'ประเภทหน่วยบริการ'),
            'provid' => Yii::t('app', 'รหัสจังหวัด'),
            'distname' => Yii::t('app', 'ชื่ออำเภอ'),
            'distid' => Yii::t('app', 'รหัสอำเภอ'),
            'subdistid' => Yii::t('app', 'รหัสตำบล'),
            'villid' => Yii::t('app', 'รหัสหมู่บ้าน'),
            'villno' => Yii::t('app', 'Villno'),
            'postcode' => Yii::t('app', 'รหัสไปรษณีย์'),
            'cup_name' => Yii::t('app', 'คปสอ.'),
            'cup_code' => Yii::t('app', 'Cup Code'),
            'pcu_code' => Yii::t('app', 'Pcu Code'),
            'pointx' => Yii::t('app', 'Pointx'),
            'pointy' => Yii::t('app', 'Pointy'),
            'status' => Yii::t('app', 'Status'),
            'updatedate' => Yii::t('app', 'Updatedate'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return CoOfficeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoOfficeQuery(get_called_class());
    }
}
