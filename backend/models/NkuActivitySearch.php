<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuActivity;

/**
 * NkuActivitySearch represents the model behind the search form of `backend\models\NkuActivity`.
 */
class NkuActivitySearch extends NkuActivity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_date', 'activity_name', 'activity_type', 'activity_position'], 'safe'],
            [['activity_num'], 'integer'],
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
        $query = NkuActivity::find();

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
            'activity_date' => $this->activity_date,
            'activity_num' => $this->activity_num,
        ]);

        $query->andFilterWhere(['like', 'activity_name', $this->activity_name])
            ->andFilterWhere(['like', 'activity_type', $this->activity_type])
            ->andFilterWhere(['like', 'activity_position', $this->activity_position]);

        return $dataProvider;
    }
}
