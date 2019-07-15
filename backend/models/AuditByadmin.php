<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "audit_byadmin".
 *
 * @property int $admin_id 管理员id
 * @property string $news_date 新闻日期
 * @property int $news_num 新闻编号
 *
 * @property NkuAdmin $admin
 * @property NkuNews $newsDate
 */
class AuditByadmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_byadmin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admin_id', 'news_date', 'news_num'], 'required'],
            [['admin_id', 'news_num'], 'integer'],
            [['news_date'], 'safe'],
            [['admin_id', 'news_date', 'news_num'], 'unique', 'targetAttribute' => ['admin_id', 'news_date', 'news_num']],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuAdmin::className(), 'targetAttribute' => ['admin_id' => 'admin_id']],
            [['news_date', 'news_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuNews::className(), 'targetAttribute' => ['news_date' => 'news_date', 'news_num' => 'news_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'news_date' => 'News Date',
            'news_num' => 'News Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(NkuAdmin::className(), ['admin_id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDate()
    {
        return $this->hasOne(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num']);
    }
}
