<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuTeacher;

/**
 * NkuTeacherSearch represents the model behind the search form of `backend\models\NkuTeacher`.
 */
class NkuTeacherSearch extends NkuTeacher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_workid'], 'integer'],
            [['teacher_name', 'teacher_position', 'teacher_college'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NkuTeacher::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'teacher_workid' => $this->teacher_workid,
        ]);

        $query->andFilterWhere(['like', 'teacher_name', $this->teacher_name])
            ->andFilterWhere(['like', 'teacher_position', $this->teacher_position])
            ->andFilterWhere(['like', 'teacher_college', $this->teacher_college]);

        return $dataProvider;
    }
}
