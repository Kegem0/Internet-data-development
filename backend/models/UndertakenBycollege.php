<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "undertaken_bycollege".
 *
 * @property string $college_name 学院名
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 *
 * @property NkuActivity $activityDate
 * @property NkuCollege $collegeName
 */
class UndertakenBycollege extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'undertaken_bycollege';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['college_name', 'activity_date', 'activity_num'], 'required'],
            [['activity_date'], 'safe'],
            [['activity_num'], 'integer'],
            [['college_name'], 'string', 'max' => 20],
            [['college_name', 'activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['college_name', 'activity_date', 'activity_num']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
            [['college_name'], 'exist', 'skipOnError' => true, 'targetClass' => NkuCollege::className(), 'targetAttribute' => ['college_name' => 'college_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'college_name' => 'College Name',
            'activity_date' => 'Activity Date',
            'activity_num' => 'Activity Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDate()
    {
        return $this->hasOne(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeName()
    {
        return $this->hasOne(NkuCollege::className(), ['college_name' => 'college_name']);
    }
}
