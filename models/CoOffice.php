<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "co_office".
 *
 * @property string $off_id
 * @property string $off_name
 * @property string $off_type
 * @property string $provid
 * @property string $distid
 * @property string $subdistid
 * @property string $villid
 * @property string $villno
 * @property string $postcode
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
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'co_office';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['off_id'], 'required'],
            [['updatedate'], 'safe'],
            [['off_id', 'postcode', 'cup_code', 'pcu_code'], 'string', 'max' => 5],
            [['off_name'], 'string', 'max' => 100],
            [['off_type', 'provid', 'villno'], 'string', 'max' => 2],
            [['distid'], 'string', 'max' => 4],
            [['subdistid'], 'string', 'max' => 6],
            [['villid'], 'string', 'max' => 8],
            [['pointx', 'pointy'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'off_id' => 'Off ID',
            'off_name' => 'Off Name',
            //'off_type' => 'Off Type',
            //'provid' => 'Provid',
            'distid' => 'Distid',
            //'subdistid' => 'Subdistid',
            //'villid' => 'Villid',
            //'villno' => 'Villno',
            //'postcode' => 'Postcode',
            'cup_code' => 'Cup Code',
            //'pcu_code' => 'Pcu Code',
            //'pointx' => 'Pointx',
            //'pointy' => 'Pointy',
            //'status' => 'Status',
            //'updatedate' => 'Updatedate',
        ];
    }

    /**
     * @inheritdoc
     * @return CoOfficeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoOfficeQuery(get_called_class());
    }
}
