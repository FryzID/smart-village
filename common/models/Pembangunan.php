<?php

namespace common\models;

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
 * @property int $sumber_dana_pembangunan_id
 * @property int $kategori_pembangunan_id
 * @property int $status_pembangunan_id
 * @property int $users_id
 * @property int $mitra_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property KategoriPembangunan $kategoriPembangunan
 * @property KategoriPembangunan $kategoriPembangunan0
 * @property KategoriPembangunan $kategoriPembangunan1
 * @property KategoriPembangunan $kategoriPembangunan2
 * @property LaporAduan[] $laporAduans
 * @property LaporProgress[] $laporProgresses
 * @property Mitra $mitra
 * @property StatusPembangunan $statusPembangunan
 * @property SumberDanaPembangunan $sumberDanaPembangunan
 * @property Users $users
 * @property Users $users0
 * @property Users $users1
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
            [['nama_pembangunan', 'foto', 'anggaran', 'tgl_mulai', 'tgl_selesai', 'longitude', 'latitude', 'keterangan', 'sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'users_id', 'mitra_id'], 'required'],
            [['anggaran'], 'number'],
            [['tgl_mulai', 'tgl_selesai', 'created_at', 'updated_at'], 'safe'],
            [['sumber_dana_pembangunan_id', 'kategori_pembangunan_id', 'status_pembangunan_id', 'users_id', 'mitra_id'], 'integer'],
            [['nama_pembangunan'], 'string', 'max' => 50],
            [['foto', 'keterangan'], 'string', 'max' => 255],
            [['longitude', 'latitude'], 'string', 'max' => 100],
            [['mitra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mitra::className(), 'targetAttribute' => ['mitra_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
            [['status_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPembangunan::className(), 'targetAttribute' => ['status_pembangunan_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
            [['sumber_dana_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => SumberDanaPembangunan::className(), 'targetAttribute' => ['sumber_dana_pembangunan_id' => 'id']],
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
        return $this->hasOne(KategoriPembangunan::className(), ['id' => 'kategori_pembangunan_id']);
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
        return $this->hasMany(LaporProgress::className(), ['pembangunan_id' => 'id']);
    }

    /**
     * Gets query for [[Mitra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMitra()
    {
        return $this->hasOne(Mitra::className(), ['id' => 'mitra_id']);
    }

    /**
     * Gets query for [[StatusPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPembangunan()
    {
        return $this->hasOne(StatusPembangunan::className(), ['id' => 'status_pembangunan_id']);
    }

    /**
     * Gets query for [[SumberDanaPembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSumberDanaPembangunan()
    {
        return $this->hasOne(SumberDanaPembangunan::className(), ['id' => 'sumber_dana_pembangunan_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }

}
