<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_teacher".
 *
 * @property int $teacher_workid 工作id
 * @property string $teacher_name 老师姓名
 * @property string $teacher_position 老师职位
 * @property string $teacher_college 老师所属学院
 *
 * @property JoinTeacher[] $joinTeachers
 * @property NkuActivity[] $activityDates
 * @property NkuCollege $teacherCollege
 */
class NkuTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_workid', 'teacher_name', 'teacher_position', 'teacher_college'], 'required'],
            [['teacher_workid'], 'integer'],
            [['teacher_name', 'teacher_position', 'teacher_college'], 'string', 'max' => 20],
            [['teacher_workid'], 'unique'],
            [['teacher_college'], 'exist', 'skipOnError' => true, 'targetClass' => NkuCollege::className(), 'targetAttribute' => ['teacher_college' => 'college_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_workid' => 'Teacher Workid',
            'teacher_name' => 'Teacher Name',
            'teacher_position' => 'Teacher Position',
            'teacher_college' => 'Teacher College',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinTeachers()
    {
        return $this->hasMany(JoinTeacher::className(), ['teacher_workid' => 'teacher_workid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('join_teacher', ['teacher_workid' => 'teacher_workid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCollege()
    {
        return $this->hasOne(NkuCollege::className(), ['college_name' => 'teacher_college']);
    }
}
