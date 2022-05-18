<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_kematian".
 *
 * @property int $id
 * @property string $no_surat
 * @property string $nik
 * @property string $nama
 * @property string $alamat_lengkap
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property int $status_pernikahan
 * @property int $pekerjaan_id
 * @property int $agama_id
 * @property int $kewarganegaraan
 * @property string $tanggal_meninggal
 * @property string $umur_meninggal
 * @property string $tempat_meninggal
 * @property string $sebab_meninggal
 * @property int $penentu_meninggal
 * @property string $nama_pelapor
 * @property string $hubungan_pelapor
 * @property string $no_telp
 * @property string $lampiran_kk
 * @property int $flag
 * @property int $status
 * @property string $created_at
 * @property string|null $upated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $desa_pengantar
 * @property string $approval_date_kades
 * @property int $kades_id
 *
 * @property Agama $agama
 * @property User $kades
 * @property Pekerjaan $pekerjaan
 * @property StatusSurat $status0
 */
class SuratKematian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_kematian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'alamat_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'status_pernikahan', 'pekerjaan_id', 'agama_id', 'kewarganegaraan', 'tanggal_meninggal', 'umur_meninggal', 'tempat_meninggal', 'sebab_meninggal', 'penentu_meninggal', 'nama_pelapor', 'hubungan_pelapor', 'no_telp'], 'required'],
            [['tanggal_lahir', 'tanggal_meninggal', 'created_at', 'upated_at', 'approval_date_kades'], 'safe'],
            [['status_pernikahan', 'pekerjaan_id', 'agama_id', 'kewarganegaraan', 'penentu_meninggal', 'flag', 'status', 'created_by', 'updated_by', 'kades_id'], 'integer'],
            [['no_surat', 'nama', 'umur_meninggal'], 'string', 'max' => 50],
            [['nik', 'no_telp'], 'string', 'max' => 20],
            [['alamat_lengkap', 'lampiran_kk'], 'string', 'max' => 255],
            [['jenis_kelamin', 'desa_pengantar'], 'string', 'max' => 10],
            [['tempat_meninggal', 'nama_pelapor', 'hubungan_pelapor'], 'string', 'max' => 100],
            [['sebab_meninggal'], 'string', 'max' => 250],
            [['agama_id'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\Agama::className(), 'targetAttribute' => ['agama_id' => 'id']],
            [['kades_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['kades_id' => 'id']],
            [['pekerjaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\Pekerjaan::className(), 'targetAttribute' => ['pekerjaan_id' => 'id']],
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
            'nik' => 'Nik',
            'nama' => 'Nama',
            'alamat_lengkap' => 'Alamat Lengkap',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status_pernikahan' => 'Status Pernikahan',
            'pekerjaan_id' => 'Pekerjaan ID',
            'agama_id' => 'Agama ID',
            'kewarganegaraan' => 'Kewarganegaraan',
            'tanggal_meninggal' => 'Tanggal Meninggal',
            'umur_meninggal' => 'Umur Meninggal',
            'tempat_meninggal' => 'Tempat Meninggal',
            'sebab_meninggal' => 'Sebab Meninggal',
            'penentu_meninggal' => 'Penentu Meninggal',
            'nama_pelapor' => 'Nama Pelapor',
            'hubungan_pelapor' => 'Hubungan Pelapor',
            'no_telp' => 'No Telp',
            'lampiran_kk' => 'Lampiran Kk',
            'flag' => 'Flag',
            'status' => 'Status',
            'created_at' => 'Created At',
            'upated_at' => 'Upated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'desa_pengantar' => 'Desa Pengantar',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
        ];
    }

    /**
     * Gets query for [[Agama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(\backend\models\Agama::className(), ['id' => 'agama_id']);
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
     * Gets query for [[Pekerjaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaan()
    {
        return $this->hasOne(\backend\models\Pekerjaan::className(), ['id' => 'pekerjaan_id']);
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
