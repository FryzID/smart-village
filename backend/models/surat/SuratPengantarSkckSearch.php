<?php

namespace backend\models\surat;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\surat\SuratPengantarSkck;

/**
 * SuratPengantarSkckSearch represents the model behind the search form of `backend\models\surat\SuratPengantarSkck`.
 */
class SuratPengantarSkckSearch extends SuratPengantarSkck
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'agama', 'status', 'flag', 'created_by', 'updated_by', 'kades_id', 'camat_id', 'kasipel_id'], 'integer'],
            [['no_surat', 'nik', 'nama', 'alamat_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'pekerjaan', 'no_telp', 'tujuan_pembuatan', 'lampiran_ktp', 'lampiran_kk', 'lampiran_akte_kelahiran', 'lampiran_pasfoto', 'desa_pengantar', 'created_at', 'updated_at', 'approval_date_kades', 'approval_date_camat', 'approval_date_kasipel'], 'safe'],
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
        $query = SuratPengantarSkck::find();

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
            'agama' => $this->agama,
            'status' => $this->status,
            'flag' => $this->flag,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'approval_date_kades' => $this->approval_date_kades,
            'kades_id' => $this->kades_id,
            'approval_date_camat' => $this->approval_date_camat,
            'camat_id' => $this->camat_id,
            'approval_date_kasipel' => $this->approval_date_kasipel,
            'kasipel_id' => $this->kasipel_id,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat_lengkap', $this->alamat_lengkap])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'tujuan_pembuatan', $this->tujuan_pembuatan])
            ->andFilterWhere(['like', 'lampiran_ktp', $this->lampiran_ktp])
            ->andFilterWhere(['like', 'lampiran_kk', $this->lampiran_kk])
            ->andFilterWhere(['like', 'lampiran_akte_kelahiran', $this->lampiran_akte_kelahiran])
            ->andFilterWhere(['like', 'lampiran_pasfoto', $this->lampiran_pasfoto])
            ->andFilterWhere(['like', 'desa_pengantar', $this->desa_pengantar]);

        return $dataProvider;
    }
}
