<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratKematian;

/**
 * SuratKematianSearch represents the model behind the search form of `backend\models\surat\SuratKematian`.
 */
class SuratKematianSearch extends SuratKematian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status_pernikahan', 'pekerjaan_id', 'agama_id', 'kewarganegaraan', 'penentu_meninggal', 'flag', 'status', 'created_by', 'updated_by', 'kades_id'], 'integer'],
            [['no_surat', 'nik', 'nama', 'alamat_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'tanggal_meninggal', 'umur_meninggal', 'tempat_meninggal', 'sebab_meninggal', 'nama_pelapor', 'hubungan_pelapor', 'no_telp', 'lampiran_kk', 'created_at', 'upated_at', 'desa_pengantar', 'approval_date_kades'], 'safe'],
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
        $query = SuratKematian::find();

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
            'tanggal_lahir' => $this->tanggal_lahir,
            'status_pernikahan' => $this->status_pernikahan,
            'pekerjaan_id' => $this->pekerjaan_id,
            'agama_id' => $this->agama_id,
            'kewarganegaraan' => $this->kewarganegaraan,
            'tanggal_meninggal' => $this->tanggal_meninggal,
            'penentu_meninggal' => $this->penentu_meninggal,
            'flag' => $this->flag,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'upated_at' => $this->upated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat_lengkap', $this->alamat_lengkap])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'umur_meninggal', $this->umur_meninggal])
            ->andFilterWhere(['like', 'tempat_meninggal', $this->tempat_meninggal])
            ->andFilterWhere(['like', 'sebab_meninggal', $this->sebab_meninggal])
            ->andFilterWhere(['like', 'nama_pelapor', $this->nama_pelapor])
            ->andFilterWhere(['like', 'hubungan_pelapor', $this->hubungan_pelapor])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'lampiran_kk', $this->lampiran_kk])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar]);

        return $dataProvider;
    }
}
