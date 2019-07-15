<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_events".
 *
 * @property string $events_time 事件时间
 * @property string $events_name 事件名称
 */
class NkuEvents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['events_time', 'events_name'], 'required'],
            [['events_time'], 'safe'],
            [['events_name'], 'string', 'max' => 20],
            [['events_time', 'events_name'], 'unique', 'targetAttribute' => ['events_time', 'events_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'events_time' => 'Events Time',
            'events_name' => 'Events Name',
        ];
    }
}
