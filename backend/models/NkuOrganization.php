<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_organization".
 *
 * @property string $organi_name 组织名
 *
 * @property UndertakenByorgani[] $undertakenByorganis
 * @property NkuActivity[] $activityDates
 */
class NkuOrganization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organi_name'], 'required'],
            [['organi_name'], 'string', 'max' => 20],
            [['organi_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'organi_name' => 'Organi Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUndertakenByorganis()
    {
        return $this->hasMany(UndertakenByorgani::className(), ['organi_name' => 'organi_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivityDates()
    {
        return $this->hasMany(NkuActivity::className(), ['activity_date' => 'activity_date', 'activity_num' => 'activity_num'])->viaTable('undertaken_byorgani', ['organi_name' => 'organi_name']);
    }
}
