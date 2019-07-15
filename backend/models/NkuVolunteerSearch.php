<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuVolunteer;

/**
 * NkuVolunteerSearch represents the model behind the search form of `backend\models\NkuVolunteer`.
 */
class NkuVolunteerSearch extends NkuVolunteer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['volunteer_id'], 'integer'],
            [['volunteer_type'], 'safe'],
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
        $query = NkuVolunteer::find();

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
        ]);

        $query->andFilterWhere(['like', 'volunteer_type', $this->volunteer_type]);

        return $dataProvider;
    }
}
