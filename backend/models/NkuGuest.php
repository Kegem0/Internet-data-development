<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_guest".
 *
 * @property int $guest_id 嘉宾id
 * @property string $guest_name 嘉宾姓名
 * @property string $guest_job 嘉宾职业
 *
 * @property JoinGuest[] $joinGuests
 * @property NkuActivity[] $activityDates
 * @property NkuAlumni $nkuAlumni
 * @property NkuLeader $nkuLeader
 */
class NkuGuest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guest_id', 'guest_name', 'guest_job'], 'required'],
            [['guest_id'], 'integer'],
            [['guest_name', 'guest_job'], 'string', 'max' => 20],
            [['guest_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guest_id' => 'Guest ID',
            'guest_name' => 'Guest Name',
            'guest_job' => 'Guest Job',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinGuests()
    {
        return $this->hasMany(JoinGuest::className(), ['guest_id' => 'guest_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('join_guest', ['guest_id' => 'guest_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuAlumni()
    {
        return $this->hasOne(NkuAlumni::className(), ['alumi_id' => 'guest_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuLeader()
    {
        return $this->hasOne(NkuLeader::className(), ['leader_id' => 'guest_id']);
    }
}
