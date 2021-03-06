<?php

namespace backend\models;

use backend\models\surat\SuratKematian;
use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Penduduk[] $penduduks
 * @property Penduduk[] $penduduks0
 * @property SuratKematian[] $suratKematians
 */
class Agama extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
    }

    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Penduduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks()
    {
        return $this->hasMany(Penduduk::className(), ['agama_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKematians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKematians()
    {
        return $this->hasMany(SuratKematian::className(), ['agama_id' => 'id']);
    }
}
