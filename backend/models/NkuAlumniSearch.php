<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuAlumni;

/**
 * NkuAlumniSearch represents the model behind the search form of `backend\models\NkuAlumni`.
 */
class NkuAlumniSearch extends NkuAlumni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alumi_id'], 'integer'],
            [['alumi_graduyear', 'alumi_degree', 'alumi_college'], 'safe'],
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
        $query = NkuAlumni::find();

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
            'alumi_id' => $this->alumi_id,
            'alumi_graduyear' => $this->alumi_graduyear,
        ]);

        $query->andFilterWhere(['like', 'alumi_degree', $this->alumi_degree])
            ->andFilterWhere(['like', 'alumi_college', $this->alumi_college]);

        return $dataProvider;
    }
}
