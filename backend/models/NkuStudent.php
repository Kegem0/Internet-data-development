<?php

namespace backend\models;

use backend\models\NkuAdmin;
use Yii;


/**
 * This is the model class for table "nku_student".
 *
 * @property int $student_id 学号
 * @property string $student_name 学生姓名
 * @property string $college_name 学生所属学院
 *
 * @property NkuAdmin $nkuAdmin
 * @property NkuCollege $collegeName
 * @property NkuVolunteer $nkuVolunteer
 * @property WriteBystu[] $writeBystus
 * @property NkuNews[] $newsDates
 */
class NkuStudent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'student_name', 'college_name'], 'required'],
            [['student_id'], 'integer'],
            [['student_name', 'college_name'], 'string', 'max' => 20],
            [['student_id'], 'unique'],
            [['college_name'], 'exist', 'skipOnError' => true, 'targetClass' => NkuCollege::className(), 'targetAttribute' => ['college_name' => 'college_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_name' => 'Student Name',
            'college_name' => 'College Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuAdmin()
    {
        return $this->hasOne(NkuAdmin::className(), ['admin_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollegeName()
    {
        return $this->hasOne(NkuCollege::className(), ['college_name' => 'college_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNkuVolunteer()
    {
        return $this->hasOne(NkuVolunteer::className(), ['volunteer_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWriteBystus()
    {
        return $this->hasMany(WriteBystu::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDates()
    {
        return $this->hasMany(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num'])->viaTable('write_bystu', ['student_id' => 'student_id']);
    }

//
}
