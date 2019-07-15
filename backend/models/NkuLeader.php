<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_leader".
 *
 * @property int $leader_id 领导id
 * @property string $leader_position 领导职位
 * @property string $leader_unit 领导单位
 *
 * @property NkuGuest $leader
 */
class NkuLeader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_leader';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['leader_id', 'leader_position', 'leader_unit'], 'required'],
            [['leader_id'], 'integer'],
            [['leader_position', 'leader_unit'], 'string', 'max' => 20],
            [['leader_id'], 'unique'],
            [['leader_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuGuest::className(), 'targetAttribute' => ['leader_id' => 'guest_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'leader_id' => 'Leader ID',
            'leader_position' => 'Leader Position',
            'leader_unit' => 'Leader Unit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeader()
    {
        return $this->hasOne(NkuGuest::className(), ['guest_id' => 'leader_id']);
    }
}
