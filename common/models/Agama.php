<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Penduduk[] $penduduks
 * @property Penduduk[] $penduduks0
 */
class Agama extends \yii\db\ActiveRecord
{
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
     * Gets query for [[Penduduks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks0()
    {
        return $this->hasMany(Penduduk::className(), ['agama_id' => 'id']);
    }
}
