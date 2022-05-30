<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratDomisiliUsaha;

/**
 * SuratDomisiliUsahaSearch represents the model behind the search form of `backend\models\surat\SuratDomisiliUsaha`.
 */
class SuratDomisiliUsahaSearch extends SuratDomisiliUsaha
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'no_surat', 'created_by', 'updated_by', 'status', 'flag', 'kades_id'], 'integer'],
            [['badan_usaha', 'bidang_usaha', 'alamat_badan_usaha', 'nik_pemilik', 'no_telp', 'maksud', 'lampiran_ktp', 'lampiran_dokumen_pendukung', 'lampiran_foto_usaha', 'lampiran_keterangan_rt_rw', 'lampiran_surat_peryataan', 'desa_pengantar', 'created_at', 'updated_at', 'approval_date_kades'], 'safe'],
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
        $query = SuratDomisiliUsaha::find();

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
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'status' => $this->status,
            'flag' => $this->flag,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
        ]);

        $query->andFilterWhere(['like', 'badan_usaha', $this->badan_usaha])
            ->andFilterWhere(['like', 'bidang_usaha', $this->bidang_usaha])
            ->andFilterWhere(['like', 'alamat_badan_usaha', $this->alamat_badan_usaha])
            ->andFilterWhere(['like', 'nik_pemilik', $this->nik_pemilik])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'maksud', $this->maksud])
            ->andFilterWhere(['like', 'lampiran_ktp', $this->lampiran_ktp])
            ->andFilterWhere(['like', 'lampiran_dokumen_pendukung', $this->lampiran_dokumen_pendukung])
            ->andFilterWhere(['like', 'lampiran_foto_usaha', $this->lampiran_foto_usaha])
            ->andFilterWhere(['like', 'lampiran_keterangan_rt_rw', $this->lampiran_keterangan_rt_rw])
            ->andFilterWhere(['like', 'lampiran_surat_peryataan', $this->lampiran_surat_peryataan])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar]);

        return $dataProvider;
    }
}
