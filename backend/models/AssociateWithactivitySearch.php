<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AssociateWithactivity;

/**
 * AssociateWithactivitySearch represents the model behind the search form of `backend\models\AssociateWithactivity`.
 */
class AssociateWithactivitySearch extends AssociateWithactivity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_date', 'news_date'], 'safe'],
            [['activity_num', 'news_num'], 'integer'],
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
        $query = AssociateWithactivity::find();

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
            'news_date' => $this->news_date,
            'news_num' => $this->news_num,
        ]);

        return $dataProvider;
    }
}
