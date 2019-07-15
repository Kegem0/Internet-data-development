<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JoinVolunteer;

/**
 * JoinVolunteerSearch represents the model behind the search form of `backend\models\JoinVolunteer`.
 */
class JoinVolunteerSearch extends JoinVolunteer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['volunteer_id', 'activity_num'], 'integer'],
            [['activity_date'], 'safe'],
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
        $query = JoinVolunteer::find();

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
            'volunteer_id' => $this->volunteer_id,
            'activity_date' => $this->activity_date,
            'activity_num' => $this->activity_num,
        ]);

        return $dataProvider;
    }
}
