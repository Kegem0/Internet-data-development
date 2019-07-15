<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "write_bystu".
 *
 * @property int $student_id 学号
 * @property string $news_date 新闻日期
 * @property int $news_num 新闻编号
 *
 * @property NkuStudent $student
 * @property NkuNews $newsDate
 */
class WriteBystu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'write_bystu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'news_date', 'news_num'], 'required'],
            [['student_id', 'news_num'], 'integer'],
            [['news_date'], 'safe'],
            [['student_id', 'news_date', 'news_num'], 'unique', 'targetAttribute' => ['student_id', 'news_date', 'news_num']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuStudent::className(), 'targetAttribute' => ['student_id' => 'student_id']],
            [['news_date', 'news_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuNews::className(), 'targetAttribute' => ['news_date' => 'news_date', 'news_num' => 'news_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'news_date' => 'News Date',
            'news_num' => 'News Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(NkuStudent::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDate()
    {
        return $this->hasOne(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }
}
