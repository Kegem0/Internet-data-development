<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_activity".
 *
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 * @property string $activity_name 活动名
 * @property string $activity_type 活动种类
 * @property string $activity_position 活动地点
 *
 * @property AssociateWithactivity[] $associateWithactivities
 * @property NkuNews[] $newsDates
 * @property JoinGuest[] $joinGuests
 * @property NkuGuest[] $guests
 * @property JoinTeacher[] $joinTeachers
 * @property NkuTeacher[] $teacherWorks
 * @property JoinVolunteer[] $joinVolunteers
 * @property NkuVolunteer[] $volunteers
 * @property UndertakenBycollege[] $undertakenBycolleges
 * @property NkuCollege[] $collegeNames
 * @property UndertakenByorgani[] $undertakenByorganis
 * @property NkuOrganization[] $organiNames
 */
class NkuActivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_activity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_date', 'activity_num', 'activity_name', 'activity_type', 'activity_position'], 'required'],
            [['activity_date'], 'safe'],
            [['activity_num'], 'integer'],
            [['activity_name', 'activity_type', 'activity_position'], 'string', 'max' => 20],
            [['activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['activity_date', 'activity_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_date' => 'Activity Date',
            'activity_num' => 'Activity Num',
            'activity_name' => 'Activity Name',
            'activity_type' => 'Activity Type',
            'activity_position' => 'Activity Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssociateWithactivities()
    {
        return $this->hasMany(AssociateWithactivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDates()
    {
        return $this->hasMany(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num'])->viaTable('associate_withactivity', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinGuests()
    {
        return $this->hasMany(JoinGuest::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuests()
    {
        return $this->hasMany(NkuGuest::className(), ['guest_id' => 'guest_id'])->viaTable('join_guest', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinTeachers()
    {
        return $this->hasMany(JoinTeacher::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherWorks()
    {
        return $this->hasMany(NkuTeacher::className(), ['teacher_workid' => 'teacher_workid'])->viaTable('join_teacher', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJoinVolunteers()
    {
        return $this->hasMany(JoinVolunteer::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteers()
    {
        return $this->hasMany(NkuVolunteer::className(), ['volunteer_id' => 'volunteer_id'])->viaTable('join_volunteer', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUndertakenBycolleges()
    {
        return $this->hasMany(UndertakenBycollege::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeNames()
    {
        return $this->hasMany(NkuCollege::className(), ['college_name' => 'college_name'])->viaTable('undertaken_bycollege', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUndertakenByorganis()
    {
        return $this->hasMany(UndertakenByorgani::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganiNames()
    {
        return $this->hasMany(NkuOrganization::className(), ['organi_name' => 'organi_name'])->viaTable('undertaken_byorgani', ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }
}
