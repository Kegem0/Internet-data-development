<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_volunteer".
 *
 * @property int $volunteer_id 志愿者学号
 * @property string $volunteer_type 志愿者种类
 *
 * @property JoinVolunteer[] $joinVolunteers
 * @property NkuActivity[] $activityDates
 * @property NkuStudent $volunteer
 */
class NkuVolunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_volunteer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['volunteer_id', 'volunteer_type'], 'required'],
            [['volunteer_id'], 'integer'],
            [['volunteer_type'], 'string', 'max' => 20],
            [['volunteer_id'], 'unique'],
            [['volunteer_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuStudent::className(), 'targetAttribute' => ['volunteer_id' => 'student_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'volunteer_id' => 'Volunteer ID',
            'volunteer_type' => 'Volunteer Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinVolunteers()
    {
        return $this->hasMany(JoinVolunteer::className(), ['volunteer_id' => 'volunteer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('join_volunteer', ['volunteer_id' => 'volunteer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteer()
    {
        return $this->hasOne(NkuStudent::className(), ['student_id' => 'volunteer_id']);
    }
}
