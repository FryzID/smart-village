<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Penduduk[] $penduduks
 * @property Penduduk[] $penduduks0
 * @property Penduduk[] $penduduks1
 * @property SuratKematian[] $suratKematians
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 30],
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
        return $this->hasMany(Penduduk::className(), ['pekerjaan_id' => 'id']);
    }

    /**
     * Gets query for [[Penduduks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks0()
    {
        return $this->hasMany(Penduduk::className(), ['pekerjaan_id' => 'id']);
    }

    /**
     * Gets query for [[Penduduks1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks1()
    {
        return $this->hasMany(Penduduk::className(), ['pekerjaan_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKematians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKematians()
    {
        return $this->hasMany(SuratKematian::className(), ['pekerjaan_id' => 'id']);
    }
}
