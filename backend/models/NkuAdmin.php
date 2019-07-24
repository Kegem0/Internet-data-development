<?php

namespace backend\models;

use Yii;


/**
 * This is the model class for table "nku_admin".
 *
 * @property int $admin_id 管理员学号
 * @property int $admin_num 管理员编号
 *
 * @property AuditByadmin[] $auditByadmins
 * @property NkuNews[] $newsDates
 * @property NkuStudent $admin
 */
class NkuAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admin_id', 'admin_num'], 'required'],
            [['admin_id', 'admin_num'], 'integer'],
            [['admin_num'], 'unique'],
            [['admin_id'], 'unique'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => NkuStudent::className(), 'targetAttribute' => ['admin_id' => 'student_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_num' => 'Admin Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuditByadmins()
    {
        return $this->hasMany(AuditByadmin::className(), ['admin_id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsDates()
    {
        return $this->hasMany(NkuNews::className(), ['news_date' => 'news_date', 'news_num' => 'news_num'])->viaTable('audit_byadmin', ['admin_id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(NkuStudent::className(), ['student_id' => 'admin_id']);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['admin_id' => $id]);
    }

}
