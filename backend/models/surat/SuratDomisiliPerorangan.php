<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_domisili_perorangan".
 *
 * @property int $id
 * @property int $no_surat
 * @property int $nik
 * @property string $nik_alamat_lengkap
 * @property string $nik_no_telp
 * @property string $desa_domisili
 * @property string $alamat_domisili
 * @property int $rt_domisili
 * @property int $rw_domisili
 * @property string $keperluan
 * @property string $lampiran_ktp
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 * @property string $approval_date_kades
 * @property int $kades_id
 * @property int $status
 * @property int $flag
 * @property string $desa_pengantar
 */
class SuratDomisiliPerorangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_domisili_perorangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'nik', 'nik_alamat_lengkap', 'nik_no_telp', 'desa_domisili', 'alamat_domisili', 'rt_domisili', 'rw_domisili', 'keperluan', 'created_by'], 'required'],
            [['no_surat', 'nik', 'rt_domisili', 'rw_domisili', 'created_by', 'updated_by', 'kades_id', 'status', 'flag'], 'integer'],
            [['created_at', 'updated_at', 'approval_date_kades'], 'safe'],
            [['nik_alamat_lengkap', 'alamat_domisili', 'keperluan'], 'string', 'max' => 255],
            [['nik_no_telp'], 'number'],
            [['desa_domisili'], 'string', 'max' => 50],
            [['lampiran_ktp'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['desa_pengantar'], 'string', 'max' => 100],
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
            'nik' => 'Nik',
            'nik_alamat_lengkap' => 'Alamat Lengkap',
            'nik_no_telp' => 'No Telp',
            'desa_domisili' => 'Desa Domisili',
            'alamat_domisili' => 'Alamat Domisili',
            'rt_domisili' => 'Rt Domisili',
            'rw_domisili' => 'Rw Domisili',
            'keperluan' => 'Keperluan',
            'lampiran_ktp' => 'Lampiran Ktp',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
            'status' => 'Status',
            'flag' => 'Flag',
            'desa_pengantar' => 'Desa Pengantar',
        ];
    }

    public function getDataPenduduk()
    {
        return $this->hasOne(\backend\models\Penduduk::className(), ['id' => 'nik']);
    }

    public function getUser()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'kades_id']);
    }
   
    public function getStatus1()
    {
        return $this->hasOne(StatusSurat::className(), ['id' => 'status']);
    }
}

    
