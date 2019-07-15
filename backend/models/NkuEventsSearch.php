<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuEvents;

/**
 * NkuEventsSearch represents the model behind the search form of `backend\models\NkuEvents`.
 */
class NkuEventsSearch extends NkuEvents
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['events_time', 'events_name'], 'safe'],
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
        $query = NkuEvents::find();

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
            'events_time' => $this->events_time,
        ]);

        $query->andFilterWhere(['like', 'events_name', $this->events_name]);

        return $dataProvider;
    }
}
