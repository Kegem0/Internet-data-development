<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nku_element".
 *
 * @property string $element_type
 */
class NkuElement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nku_element';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['element_type'], 'required'],
            [['element_type'], 'string', 'max' => 20],
            [['element_type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'element_type' => 'Element Type',
        ];
    }
}
