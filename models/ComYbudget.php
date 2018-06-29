<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%com_ybudget}}".
 *
 * @property string $year_budget
 * @property string $date_start
 * @property string $date_end
 */
class ComYbudget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%com_ybudget}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year_budget'], 'required'],
            [['date_start', 'date_end', 'year_budget_name'], 'safe'],
            [['year_budget'], 'string', 'max' => 4],
            [['year_budget_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'year_budget' => Yii::t('app', 'ปีงบประมาณ'),
            'year_budget_name' => Yii::t('app', 'ช่วงปีงบประมาณ'),
            'date_start' => Yii::t('app', 'วันที่เริ่มต้น'),
            'date_end' => Yii::t('app', 'วันที่สิ้นสุด'),
        ];
    }
}
