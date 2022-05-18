<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_kelahiran".
 *
 * @property int $id
 * @property string|null $no_surat
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property float $berat
 * @property float $tinggi
 * @property int $tipe_kelahiran
 * @property int|null $kembar_ke
 * @property int $tempat_kelahiran
 * @property string $tempat_kelahiran_desa
 * @property int $penolong_kelahiran
 * @property string $nik_ayah
 * @property string $nama_ayah
 * @property string $tanggal_lahir_ayah
 * @property string $alamat_lengkap_ayah
 * @property int $kewarganegaraan_ayah
 * @property string $no_telp_ayah
 * @property string $nik_ibu
 * @property string $nama_ibu
 * @property string $tanggal_lahir_ibu
 * @property string $alamat_lengkap_ibu
 * @property int $kewarganegaraan_ibu
 * @property string $nama_pelapor
 * @property string $hubungan_pelapor
 * @property string $desa_pengantar
 * @property string|null $lampiran_kk
 * @property string|null $lampiran_surat_nikah
 * @property string|null $lampiran_surat_kelahiran
 * @property int $flag
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string|null $approval_date_kades
 * @property int|null $kades_id
 *
 * @property User $kades
 * @property StatusSurat $status0
 */
class SuratKelahiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_kelahiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'tanggal_lahir', 'berat', 'tinggi', 'tipe_kelahiran', 'tempat_kelahiran', 'tempat_kelahiran_desa', 'penolong_kelahiran', 'nik_ayah', 'nama_ayah', 'tanggal_lahir_ayah', 'alamat_lengkap_ayah', 'kewarganegaraan_ayah', 'no_telp_ayah', 'nik_ibu', 'nama_ibu', 'tanggal_lahir_ibu', 'alamat_lengkap_ibu', 'kewarganegaraan_ibu', 'nama_pelapor', 'hubungan_pelapor'], 'required'],
            [['tanggal_lahir', 'tanggal_lahir_ayah', 'tanggal_lahir_ibu', 'created_at', 'updated_at', 'approval_date_kades'], 'safe'],
            [['berat', 'tinggi'], 'number'],
            [['tipe_kelahiran', 'kembar_ke', 'tempat_kelahiran', 'penolong_kelahiran', 'kewarganegaraan_ayah', 'kewarganegaraan_ibu', 'flag', 'status', 'created_by', 'updated_by', 'kades_id'], 'integer'],
            [['no_surat', 'nama', 'nama_ayah', 'nama_ibu'], 'string', 'max' => 50],
            [['jenis_kelamin'], 'string', 'max' => 1],
            [['tempat_kelahiran_desa', 'nama_pelapor', 'hubungan_pelapor'], 'string', 'max' => 100],
            [['nik_ayah', 'no_telp_ayah', 'nik_ibu'], 'string', 'max' => 20],
            [['alamat_lengkap_ayah', 'alamat_lengkap_ibu', 'lampiran_kk', 'lampiran_surat_nikah', 'lampiran_surat_kelahiran'], 'string', 'max' => 255],
            [['desa_pengantar'], 'string', 'max' => 10],
            [['kades_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['kades_id' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusSurat::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_surat' => 'No Surat',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'berat' => 'Berat',
            'tinggi' => 'Tinggi',
            'tipe_kelahiran' => 'Tipe Kelahiran',
            'kembar_ke' => 'Kembar Ke',
            'tempat_kelahiran' => 'Tempat Kelahiran',
            'tempat_kelahiran_desa' => 'Tempat Kelahiran Desa',
            'penolong_kelahiran' => 'Penolong Kelahiran',
            'nik_ayah' => 'Nik Ayah',
            'nama_ayah' => 'Nama Ayah',
            'tanggal_lahir_ayah' => 'Tanggal Lahir Ayah',
            'alamat_lengkap_ayah' => 'Alamat Lengkap Ayah',
            'kewarganegaraan_ayah' => 'Kewarganegaraan Ayah',
            'no_telp_ayah' => 'No Telp Ayah',
            'nik_ibu' => 'Nik Ibu',
            'nama_ibu' => 'Nama Ibu',
            'tanggal_lahir_ibu' => 'Tanggal Lahir Ibu',
            'alamat_lengkap_ibu' => 'Alamat Lengkap Ibu',
            'kewarganegaraan_ibu' => 'Kewarganegaraan Ibu',
            'nama_pelapor' => 'Nama Pelapor',
            'hubungan_pelapor' => 'Hubungan Pelapor',
            'desa_pengantar' => 'Desa Pengantar',
            'lampiran_kk' => 'Lampiran Kk',
            'lampiran_surat_nikah' => 'Lampiran Surat Nikah',
            'lampiran_surat_kelahiran' => 'Lampiran Surat Kelahiran',
            'flag' => 'Flag',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
        ];
    }

    /**
     * Gets query for [[Kades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKades()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'kades_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(StatusSurat::className(), ['id' => 'status']);
    }
}
