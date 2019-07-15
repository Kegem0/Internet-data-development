<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_alumni".
 *
 * @property int $alumi_id 校友id
 * @property string $alumi_graduyear 校友毕业年份
 * @property string $alumi_degree 校友学位
 * @property string $alumi_college 校友毕业院校
 *
 * @property NkuGuest $alumi
 * @property NkuCollege $alumiCollege
 */
class NkuAlumni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_alumni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alumi_id', 'alumi_graduyear', 'alumi_degree', 'alumi_college'], 'required'],
            [['alumi_id'], 'integer'],
            [['alumi_graduyear'], 'safe'],
            [['alumi_degree', 'alumi_college'], 'string', 'max' => 20],
            [['alumi_id'], 'unique'],
            [['alumi_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuGuest::className(), 'targetAttribute' => ['alumi_id' => 'guest_id']],
            [['alumi_college'], 'exist', 'skipOnError' => true, 'targetClass' => NkuCollege::className(), 'targetAttribute' => ['alumi_college' => 'college_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'alumi_id' => 'Alumi ID',
            'alumi_graduyear' => 'Alumi Graduyear',
            'alumi_degree' => 'Alumi Degree',
            'alumi_college' => 'Alumi College',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumi()
    {
        return $this->hasOne(NkuGuest::className(), ['guest_id' => 'alumi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumiCollege()
    {
        return $this->hasOne(NkuCollege::className(), ['college_name' => 'alumi_college']);
    }
}
