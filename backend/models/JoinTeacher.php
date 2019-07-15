<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "join_teacher".
 *
 * @property int $teacher_workid 老师工作id
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 *
 * @property NkuTeacher $teacherWork
 * @property NkuActivity $activityDate
 */
class JoinTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'join_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_workid', 'activity_date', 'activity_num'], 'required'],
            [['teacher_workid', 'activity_num'], 'integer'],
            [['activity_date'], 'safe'],
            [['teacher_workid', 'activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['teacher_workid', 'activity_date', 'activity_num']],
            [['teacher_workid'], 'exist', 'skipOnError' => true, 'targetClass' => NkuTeacher::className(), 'targetAttribute' => ['teacher_workid' => 'teacher_workid']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_workid' => 'Teacher Workid',
            'activity_date' => 'Activity Date',
            'activity_num' => 'Activity Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherWork()
    {
        return $this->hasOne(NkuTeacher::className(), ['teacher_workid' => 'teacher_workid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDate()
    {
        return $this->hasOne(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }
}
