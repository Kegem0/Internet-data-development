<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_news".
 *
 * @property string $news_date 新闻日期
 * @property int $news_num 新闻编号
 * @property string $news_headline 新闻标题
 * @property int $news_ifpassed 是否通过审核
 *
 * @property AssociateWithactivity[] $associateWithactivities
 * @property NkuActivity[] $activityDates
 * @property AuditByadmin[] $auditByadmins
 * @property NkuAdmin[] $admins
 * @property WriteBystu[] $writeBystus
 * @property NkuStudent[] $students
 */
class NkuNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_date', 'news_num', 'news_headline', 'news_ifpassed'], 'required'],
            [['news_date'], 'safe'],
            [['news_num', 'news_ifpassed'], 'integer'],
            [['news_headline'], 'string', 'max' => 20],
            [['news_date', 'news_num'], 'unique', 'targetAttribute' => ['news_date', 'news_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_date' => 'News Date',
            'news_num' => 'News Num',
            'news_headline' => 'News Headline',
            'news_ifpassed' => 'News Ifpassed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssociateWithactivities()
    {
        return $this->hasMany(AssociateWithactivity::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('associate_withactivity', ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuditByadmins()
    {
        return $this->hasMany(AuditByadmin::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmins()
    {
        return $this->hasMany(NkuAdmin::className(), ['admin_id' => 'admin_id'])->viaTable('audit_byadmin', ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWriteBystus()
    {
        return $this->hasMany(WriteBystu::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(NkuStudent::className(), ['student_id' => 'student_id'])->viaTable('write_bystu', ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }
}
