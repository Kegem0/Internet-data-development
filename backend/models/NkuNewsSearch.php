<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NkuNews;

/**
 * NkuNewsSearch represents the model behind the search form of `backend\models\NkuNews`.
 */
class NkuNewsSearch extends NkuNews
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_date', 'news_headline'], 'safe'],
            [['news_num', 'news_ifpassed'], 'integer'],
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
        $query = NkuNews::find();


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
            'news_date' => $this->news_date,
            'news_num' => $this->news_num,
            'news_ifpassed' => $this->news_ifpassed,
        ]);

        $query->andFilterWhere(['like', 'news_headline', $this->news_headline]);

        return $dataProvider;
    }

    public function search_fail($params)
    {
        $query = NkuNews::find();


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
            'news_date' => $this->news_date,
            'news_num' => $this->news_num,
            'news_ifpassed' => $this->news_ifpassed,
        ]);

        $query->andFilterWhere(['like', 'news_headline', $this->news_headline]);
        $query->andFilterWhere([ 'news_ifpassed'=>0]);
        return $dataProvider;
    }
}
