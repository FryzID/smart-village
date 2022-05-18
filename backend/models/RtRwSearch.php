<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RtRw;

/**
 * RtRwSearch represents the model behind the search form of `backend\models\RtRw`.
 */
class RtRwSearch extends RtRw
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rt_child', 'dusun_id'], 'integer'],
            [['rw_parent'], 'safe'],
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
        $query = RtRw::find();

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
            'id' => $this->id,
            'rt_child' => $this->rt_child,
            'dusun_id' => $this->dusun_id,
        ]);

        $query->andFilterWhere(['like', 'rw_parent', $this->rw_parent]);

        return $dataProvider;
    }
}
