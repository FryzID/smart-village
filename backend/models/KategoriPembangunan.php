<?php

namespace backend\models;

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
        return $this->hasMany(\common\models\Pembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[RequestPembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequestPembangunans()
    {
        return $this->hasMany(\common\models\RequestPembangunan::className(), ['kategori_pembangunan_id' => 'id']);
    }
}
