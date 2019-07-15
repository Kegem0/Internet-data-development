<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_volunteer".
 *
 * @property int $volunteer_id 志愿者学号
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 *
 * @property NkuVolunteer $volunteer
 * @property NkuActivity $activityDate
 */
class JoinVolunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'join_volunteer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['volunteer_id', 'activity_date', 'activity_num'], 'required'],
            [['volunteer_id', 'activity_num'], 'integer'],
            [['activity_date'], 'safe'],
            [['volunteer_id', 'activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['volunteer_id', 'activity_date', 'activity_num']],
            [['volunteer_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuVolunteer::className(), 'targetAttribute' => ['volunteer_id' => 'volunteer_id']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'volunteer_id' => 'Volunteer ID',
            'activity_date' => 'Activity Date',
            'activity_num' => 'Activity Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteer()
    {
        return $this->hasOne(NkuVolunteer::className(), ['volunteer_id' => 'volunteer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDate()
    {
        return $this->hasOne(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }
}
