<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuLeader;

/**
 * NkuLeaderSearch represents the model behind the search form of `backend\models\NkuLeader`.
 */
class NkuLeaderSearch extends NkuLeader
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['leader_id'], 'integer'],
            [['leader_position', 'leader_unit'], 'safe'],
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
        $query = NkuLeader::find();

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
            'leader_id' => $this->leader_id,
        ]);

        $query->andFilterWhere(['like', 'leader_position', $this->leader_position])
            ->andFilterWhere(['like', 'leader_unit', $this->leader_unit]);

        return $dataProvider;
    }
}
