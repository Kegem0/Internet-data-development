<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "undertaken_byorgani".
 *
 * @property string $organi_name 组织名
 * @property string $activity_date 活动日期
 * @property int $activity_num 活动编号
 *
 * @property NkuOrganization $organiName
 * @property NkuActivity $activityDate
 */
class UndertakenByorgani extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'undertaken_byorgani';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organi_name', 'activity_date', 'activity_num'], 'required'],
            [['activity_date'], 'safe'],
            [['activity_num'], 'integer'],
            [['organi_name'], 'string', 'max' => 20],
            [['organi_name', 'activity_date', 'activity_num'], 'unique', 'targetAttribute' => ['organi_name', 'activity_date', 'activity_num']],
            [['organi_name'], 'exist', 'skipOnError' => true, 'targetClass' => NkuOrganization::className(), 'targetAttribute' => ['organi_name' => 'organi_name']],
            [['activity_date', 'activity_num'], 'exist', 'skipOnError' => true, 'targetClass' => NkuActivity::className(), 'targetAttribute' => ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'organi_name' => 'Organi Name',
            'activity_date' => 'Activity Date',
            'activity_num' => 'Activity Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganiName()
    {
        return $this->hasOne(NkuOrganization::className(), ['organi_name' => 'organi_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDate()
    {
        return $this->hasOne(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num']);
    }
}
