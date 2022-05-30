<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_domisili_usaha".
 *
 * @property int $id
 * @property int $no_surat
 * @property string $badan_usaha
 * @property string $bidang_usaha
 * @property string $alamat_badan_usaha
 * @property string $nik_pemilik
 * @property string $no_telp
 * @property string $maksud
 * @property string $lampiran_ktp
 * @property string $lampiran_dokumen_pendukung
 * @property string $lampiran_foto_usaha
 * @property string $lampiran_keterangan_rt_rw
 * @property string $lampiran_surat_peryataan
 * @property string $desa_pengantar
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 * @property int $status
 * @property int $flag
 * @property string $approval_date_kades
 * @property int $kades_id
 */
class SuratDomisiliUsaha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_domisili_usaha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'badan_usaha', 'bidang_usaha', 'alamat_badan_usaha', 'nik_pemilik', 'no_telp', 'maksud'], 'required'],
            [['no_surat', 'created_by', 'updated_by', 'status', 'flag', 'kades_id'], 'integer'],
            [['created_at', 'updated_at', 'approval_date_kades'], 'safe'],
            [['badan_usaha', 'bidang_usaha', 'lampiran_dokumen_pendukung', 'lampiran_foto_usaha', 'lampiran_keterangan_rt_rw', 'lampiran_surat_peryataan'], 'string', 'max' => 100],
            [['alamat_badan_usaha', 'maksud'], 'string', 'max' => 255],
            [['nik_pemilik'], 'string', 'max' => 20],
            [['no_telp'], 'number'],
            [['desa_pengantar'], 'string', 'max' => 50],
            [['lampiran_ktp'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
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
            'badan_usaha' => 'Badan Usaha',
            'bidang_usaha' => 'Bidang Usaha',
            'alamat_badan_usaha' => 'Alamat Badan Usaha',
            'nik_pemilik' => 'Nik Pemilik',
            'no_telp' => 'No Telp',
            'maksud' => 'Maksud',
            'lampiran_ktp' => 'Lampiran Ktp',
            'lampiran_dokumen_pendukung' => 'Lampiran Dokumen Pendukung',
            'lampiran_foto_usaha' => 'Lampiran Foto Usaha',
            'lampiran_keterangan_rt_rw' => 'Lampiran Keterangan Rt Rw',
            'lampiran_surat_peryataan' => 'Lampiran Surat Peryataan',
            'desa_pengantar' => 'Desa Pengantar',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'status' => 'Status',
            'flag' => 'Flag',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
        ];
    }

    public function getDataPenduduk()
    {
        return $this->hasOne(\backend\models\Penduduk::className(), ['id' => 'nik_pemilik']);
    }
    
    public function getStatus1()
    {
        return $this->hasOne(StatusSurat::className(), ['id' => 'status']);
    }

    public function getKades()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'kades_id']);
    }

}
