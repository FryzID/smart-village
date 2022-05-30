<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratKeteranganMiskin;

/**
 * SuratKeteranganMiskinSearch represents the model behind the search form of `backend\models\surat\SuratKeteranganMiskin`.
 */
class SuratKeteranganMiskinSearch extends SuratKeteranganMiskin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nik_id', 'status', 'flag', 'created_by', 'updated_by', 'kades_id', 'camat_id'], 'integer'],
            [['no_surat', 'no_telp', 'keterangan', 'surat_pernyataan_miskin', 'desa_pengantar', 'lampiran_ktp', 'lampiran_kk', 'created_at', 'updated_at', 'approval_date_kades', 'approval_date_camat'], 'safe'],
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
        $query = SuratKeteranganMiskin::find();

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
            'nik_id' => $this->nik_id,
            'status' => $this->status,
            'flag' => $this->flag,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
            'approval_date_camat' => $this->approval_date_camat,
            'camat_id' => $this->camat_id,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'surat_pernyataan_miskin', $this->surat_pernyataan_miskin])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar])
            ->andFilterWhere(['like', 'lampiran_ktp', $this->lampiran_ktp])
            ->andFilterWhere(['like', 'lampiran_kk', $this->lampiran_kk]);

        return $dataProvider;
    }
}
