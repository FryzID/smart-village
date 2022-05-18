<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lapor_progress".
 *
 * @property int $id
 * @property string $image
 * @property string $tanggal
 * @property float $capaian_progress
 * @property string $uraian_pekerjaan
 * @property int $pembangunan_id
 *
 * @property Pembangunan $pembangunan
 */
class LaporProgress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lapor_progress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'tanggal', 'capaian_progress', 'uraian_pekerjaan', 'pembangunan_id'], 'required'],
            [['tanggal'], 'safe'],
            [['capaian_progress'], 'number'],
            [['uraian_pekerjaan'], 'string'],
            [['pembangunan_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pembangunan::className(), 'targetAttribute' => ['pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'tanggal' => 'Tanggal',
            'capaian_progress' => 'Capaian Progress',
            'uraian_pekerjaan' => 'Uraian Pekerjaan',
            'pembangunan_id' => 'Pembangunan ID',
        ];
    }

    /**
     * Gets query for [[Pembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunan()
    {
        return $this->hasOne(Pembangunan::className(), ['id' => 'pembangunan_id']);
    }
}
