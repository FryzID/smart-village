<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratDomisiliPerorangan;

/**
 * SuratDomisiliPeroranganSearch represents the model behind the search form of `backend\models\surat\SuratDomisiliPerorangan`.
 */
class SuratDomisiliPeroranganSearch extends SuratDomisiliPerorangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'no_surat', 'nik', 'rt_domisili', 'rw_domisili', 'created_by', 'updated_by', 'kades_id', 'status', 'flag'], 'integer'],
            [['nik_alamat_lengkap', 'nik_no_telp', 'desa_domisili', 'alamat_domisili', 'keperluan', 'lampiran_ktp', 'created_at', 'updated_at', 'approval_date_kades', 'desa_pengantar'], 'safe'],
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
        $query = SuratDomisiliPerorangan::find();

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
            'no_surat' => $this->no_surat,
            'nik' => $this->nik,
            'rt_domisili' => $this->rt_domisili,
            'rw_domisili' => $this->rw_domisili,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
            'status' => $this->status,
            'flag' => $this->flag,
        ]);

        $query->andFilterWhere(['like', 'nik_alamat_lengkap', $this->nik_alamat_lengkap])
            ->andFilterWhere(['like', 'nik_no_telp', $this->nik_no_telp])
            ->andFilterWhere(['like', 'desa_domisili', $this->desa_domisili])
            ->andFilterWhere(['like', 'alamat_domisili', $this->alamat_domisili])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan])
            ->andFilterWhere(['like', 'lampiran_ktp', $this->lampiran_ktp])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar]);

        return $dataProvider;
    }
}
