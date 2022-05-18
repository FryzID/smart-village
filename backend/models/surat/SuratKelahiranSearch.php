<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratKelahiran;

/**
 * SuratKelahiranSearch represents the model behind the search form of `backend\models\surat\SuratKelahiran`.
 */
class SuratKelahiranSearch extends SuratKelahiran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tipe_kelahiran', 'kembar_ke', 'tempat_kelahiran', 'penolong_kelahiran', 'kewarganegaraan_ayah', 'kewarganegaraan_ibu', 'flag', 'status', 'created_by', 'updated_by', 'kades_id'], 'integer'],
            [['no_surat', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'tempat_kelahiran_desa', 'nik_ayah', 'nama_ayah', 'tanggal_lahir_ayah', 'alamat_lengkap_ayah', 'no_telp_ayah', 'nik_ibu', 'nama_ibu', 'tanggal_lahir_ibu', 'alamat_lengkap_ibu', 'nama_pelapor', 'hubungan_pelapor', 'desa_pengantar', 'lampiran_kk', 'lampiran_surat_nikah', 'lampiran_surat_kelahiran', 'created_at', 'updated_at', 'approval_date_kades'], 'safe'],
            [['berat', 'tinggi'], 'number'],
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
        $query = SuratKelahiran::find();

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
            'berat' => $this->berat,
            'tinggi' => $this->tinggi,
            'tipe_kelahiran' => $this->tipe_kelahiran,
            'kembar_ke' => $this->kembar_ke,
            'tempat_kelahiran' => $this->tempat_kelahiran,
            'penolong_kelahiran' => $this->penolong_kelahiran,
            'tanggal_lahir_ayah' => $this->tanggal_lahir_ayah,
            'kewarganegaraan_ayah' => $this->kewarganegaraan_ayah,
            'tanggal_lahir_ibu' => $this->tanggal_lahir_ibu,
            'kewarganegaraan_ibu' => $this->kewarganegaraan_ibu,
            'flag' => $this->flag,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tempat_kelahiran_desa', $this->tempat_kelahiran_desa])
            ->andFilterWhere(['like', 'nik_ayah', $this->nik_ayah])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'alamat_lengkap_ayah', $this->alamat_lengkap_ayah])
            ->andFilterWhere(['like', 'no_telp_ayah', $this->no_telp_ayah])
            ->andFilterWhere(['like', 'nik_ibu', $this->nik_ibu])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'alamat_lengkap_ibu', $this->alamat_lengkap_ibu])
            ->andFilterWhere(['like', 'nama_pelapor', $this->nama_pelapor])
            ->andFilterWhere(['like', 'hubungan_pelapor', $this->hubungan_pelapor])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar])
            ->andFilterWhere(['like', 'lampiran_kk', $this->lampiran_kk])
            ->andFilterWhere(['like', 'lampiran_surat_nikah', $this->lampiran_surat_nikah])
            ->andFilterWhere(['like', 'lampiran_surat_kelahiran', $this->lampiran_surat_kelahiran]);

        return $dataProvider;
    }
}
