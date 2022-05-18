<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratKeteranganDesa;

/**
 * SuratKeteranganDesaSearch represents the model behind the search form of `backend\models\surat\SuratKeteranganDesa`.
 */
class SuratKeteranganDesaSearch extends SuratKeteranganDesa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kades_id', 'created_by', 'updated_by', 'status', 'flag'], 'integer'],
            [['judul_surat', 'no_surat', 'nik', 'no_telp', 'keterangan', 'keperluan', 'lampiran_ktp', 'created_at', 'updated_at', 'desa_pengantar', 'approval_date_kades'], 'safe'],
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
        $query = SuratKeteranganDesa::find();

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
            'kades_id' => $this->kades_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'status' => $this->status,
            'flag' => $this->flag,
            'approval_date_kades' => $this->approval_date_kades,
        ]);

        $query->andFilterWhere(['like', 'judul_surat', $this->judul_surat])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan])
            ->andFilterWhere(['like', 'lampiran_ktp', $this->lampiran_ktp])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar]);

        return $dataProvider;
    }
}
