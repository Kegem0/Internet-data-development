<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_guest".
 *
 * @property int $guest_id 宾客id
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 *
 * @property NkuActivity $activityDate
 * @property NkuGuest $guest
 */
class JoinGuest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'join_guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guest_id', 'activity_date', 'activity_num'], 'required'],
            [['guest_id', 'activity_num'], 'integer'],
            [['activity_date'], 'safe'],
            [['guest_id', 'activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['guest_id', 'activity_date', 'activity_num']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
            [['guest_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuGuest::className(), 'targetAttribute' => ['guest_id' => 'guest_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guest_id' => 'Guest ID',
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
    public function getGuest()
    {
        return $this->hasOne(NkuGuest::className(), ['guest_id' => 'guest_id']);
    }
}
