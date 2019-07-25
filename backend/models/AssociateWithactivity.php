<?php
/**author 1711447**/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "associate_withactivity".
 *
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 * @property string $news_date 新闻日期
 * @property int $news_num 新闻编号
 *
 * @property NkuActivity $activityDate
 * @property NkuNews $newsDate
 */
class AssociateWithactivity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associate_withactivity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_date', 'activity_num', 'news_date', 'news_num'], 'required'],
            [['activity_date', 'news_date'], 'safe'],
            [['activity_num', 'news_num'], 'integer'],
            [['activity_date', 'activity_num', 'news_date', 'news_num'], 'unique', 'targetAttribute' => ['activity_date', 'activity_num', 'news_date', 'news_num']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
            [['news_date', 'news_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuNews::className(), 'targetAttribute' => ['news_date' => 'news_date', 'news_num' => 'news_num']],
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
            'news_date' => 'News Date',
            'news_num' => 'News Num',
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
    public function getNewsDate()
    {
        return $this->hasOne(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }
}
