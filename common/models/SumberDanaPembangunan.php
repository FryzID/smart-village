<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sumber_dana_pembangunan".
 *
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Pembangunan[] $pembangunans
 */
class SumberDanaPembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sumber_dana_pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama'], 'string', 'max' => 45],
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
        return $this->hasMany(Pembangunan::className(), ['sumber_dana_pembangunan_id' => 'id']);
    }
}
