<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pembangunan".
 *
 * @property int $id
 * @property string $nama_pembangunan
 * @property string $foto
 * @property float $anggaran
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $longitude
 * @property string $latitude
 * @property string $keterangan
 * @property float $presentase
 * @property int $sumber_dana_pembangunan_id
 * @property int $kategori_pembangunan_id
 * @property int $status_pembangunan_id
 * @property int $users_id
 * @property int $mitra_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property KategoriPembangunan $kategoriPembangunan
 * @property LaporAduan[] $laporAduans
 * @property LaporProgress[] $laporProgresses
 * @property Mitra $mitra
 * @property StatusPembangunan $statusPembangunan
 * @property SumberDanaPembangunan $sumberDanaPembangunan
 * @property User $users
 */
class Pembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pembangunan', 'anggaran', 'tgl_mulai', 'tgl_selesai', 'longitude', 'latitude', 'keterangan', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'users_id', 'mitra_id'], 'required'],
            [['anggaran', 'presentase'], 'number'],
            [['tgl_mulai', 'tgl_selesai', 'created_at', 'updated_at'], 'safe'],
            [['sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'users_id', 'mitra_id'], 'integer'],
            [['nama_pembangunan'], 'string', 'max' => 50],
            [['foto'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['longitude', 'latitude'], 'string', 'max' => 100],
            [['mitra_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Mitra::className(), 'targetAttribute' => ['mitra_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['users_id' => 'id']],
            [['status_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\StatusPembangunan::className(), 'targetAttribute' => ['status_pembangunan_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['sumber_dana_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\SumberDanaPembangunan::className(), 'targetAttribute' => ['sumber_dana_pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pembangunan' => 'Nama Pembangunan',
            'foto' => 'Foto',
            'anggaran' => 'Anggaran',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'keterangan' => 'Keterangan',
            'presentase' => 'Presentase',
            'sumber_dana_pembangunan_id' => 'Sumber Dana Pembangunan ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status_pembangunan_id' => 'Status Pembangunan ID',
            'users_id' => 'Users ID',
            'mitra_id' => 'Mitra ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[KategoriPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriPembangunan()
    {
        return $this->hasOne(\common\models\KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
    }

    /**
     * Gets query for [[LaporAduans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporAduans()
    {
        return $this->hasMany(LaporAduan::className(), ['pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[LaporProgresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporProgresses()
    {
        return $this->hasMany(\common\models\LaporProgress::className(), ['pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Mitra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMitra()
    {
        return $this->hasOne(\common\models\Mitra::className(), ['id' => 'mitra_id']);
    }

    /**
     * Gets query for [[StatusPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPembangunan()
    {
        return $this->hasOne(\common\models\StatusPembangunan::className(), ['id' => 'status_pembangunan_id']);
    }

    /**
     * Gets query for [[SumberDanaPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSumberDanaPembangunan()
    {
        return $this->hasOne(\common\models\SumberDanaPembangunan::className(), ['id' => 'sumber_dana_pembangunan_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'users_id']);
    }

}
