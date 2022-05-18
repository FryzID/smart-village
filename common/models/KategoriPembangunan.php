<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategori_pembangunan".
 *
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Pembangunan[] $pembangunans
 * @property Pembangunan[] $pembangunans0
 * @property Pembangunan[] $pembangunans1
 * @property Pembangunan[] $pembangunans2
 * @property RequestPembangunan[] $requestPembangunans
 */
class KategoriPembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama'], 'string', 'max' => 50],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Pembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans()
    {
        return $this->hasMany(Pembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans0()
    {
        return $this->hasMany(Pembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans1()
    {
        return $this->hasMany(Pembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans2()
    {
        return $this->hasMany(Pembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[RequestPembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequestPembangunans()
    {
        return $this->hasMany(RequestPembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }
}
