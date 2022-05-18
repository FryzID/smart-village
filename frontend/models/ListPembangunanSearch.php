<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pembangunan;

/**
 * ListPembangunanSearch represents the model behind the search form of `common\models\Pembangunan`.
 */
class ListPembangunanSearch extends Pembangunan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'users_id', 'mitra_id'], 'integer'],
            [['nama_pembangunan', 'foto', 'tgl_mulai', 'tgl_selesai', 'longitude', 'latitude', 'keterangan', 'created_at', 'updated_at'], 'safe'],
            [['anggaran', 'presentase'], 'number'],
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
        $query = Pembangunan::find();

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
            'anggaran' => $this->anggaran,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
            'presentase' => $this->presentase,
            'sumber_dana_pembangunan_id' => $this->sumber_dana_pembangunan_id,
            'kategori_pembangunan_id' => $this->kategori_pembangunan_id,
            'status_pembangunan_id' => $this->status_pembangunan_id,
            'users_id' => $this->users_id,
            'mitra_id' => $this->mitra_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_pembangunan', $this->nama_pembangunan])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
