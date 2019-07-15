<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuGuest;

/**
 * NkuGuestSearch represents the model behind the search form of `backend\models\NkuGuest`.
 */
class NkuGuestSearch extends NkuGuest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guest_id'], 'integer'],
            [['guest_name', 'guest_job'], 'safe'],
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
        $query = NkuGuest::find();

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
            'guest_id' => $this->guest_id,
        ]);

        $query->andFilterWhere(['like', 'guest_name', $this->guest_name])
            ->andFilterWhere(['like', 'guest_job', $this->guest_job]);

        return $dataProvider;
    }
}
