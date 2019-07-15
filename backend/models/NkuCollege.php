<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_college".
 *
 * @property string $college_name 学院名
 *
 * @property NkuAlumni[] $nkuAlumnis
 * @property NkuStudent[] $nkuStudents
 * @property NkuTeacher[] $nkuTeachers
 * @property UndertakenBycollege[] $undertakenBycolleges
 * @property NkuActivity[] $activityDates
 */
class NkuCollege extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_college';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['college_name'], 'required'],
            [['college_name'], 'string', 'max' => 20],
            [['college_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'college_name' => 'College Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuAlumnis()
    {
        return $this->hasMany(NkuAlumni::className(), ['alumi_college' => 'college_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuStudents()
    {
        return $this->hasMany(NkuStudent::className(), ['college_name' => 'college_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuTeachers()
    {
        return $this->hasMany(NkuTeacher::className(), ['teacher_college' => 'college_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUndertakenBycolleges()
    {
        return $this->hasMany(UndertakenBycollege::className(), ['college_name' => 'college_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('undertaken_bycollege', ['college_name' => 'college_name']);
    }
}
