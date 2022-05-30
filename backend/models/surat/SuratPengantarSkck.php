<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_pengantar_skck".
 *
 * @property int $id
 * @property string $no_surat
 * @property string $nik
 * @property string $nama
 * @property string $alamat_lengkap
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $pekerjaan
 * @property int $agama
 * @property string $no_telp
 * @property string $tujuan_pembuatan
 * @property string $lampiran_ktp
 * @property string $lampiran_kk
 * @property string $lampiran_akte_kelahiran
 * @property string $lampiran_pasfoto
 * @property string $desa_pengantar
 * @property int $status
 * @property int $flag
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 * @property string $approval_date_kades
 * @property int $kades_id
 * @property string $approval_date_camat
 * @property int $camat_id
 * @property string $approval_date_kasipel
 * @property int $kasipel_id
 *
 * @property User $camat
 * @property User $createdBy
 * @property User $kades
 * @property User $kasipel
 * @property User $kasipel0
 * @property User $updatedBy
 */
class SuratPengantarSkck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_pengantar_skck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'nik','no_telp', 'tujuan_pembuatan'], 'required'],
            [['agama', 'status', 'flag', 'created_by', 'updated_by', 'kades_id', 'camat_id', 'kasipel_id'], 'integer'],
            [['tujuan_pembuatan'], 'string'],
            [['created_at', 'updated_at', 'approval_date_kades', 'approval_date_camat', 'approval_date_kasipel'], 'safe'],
            [['no_surat', 'nama'], 'string', 'max' => 50],
            [['nik'], 'string', 'max' => 20],
            [['no_telp'], 'number'],
            [['alamat_lengkap', 'tempat_lahir', 'tanggal_lahir', 'pekerjaan', 'lampiran_ktp', 'lampiran_kk', 'lampiran_akte_kelahiran', 'lampiran_pasfoto'], 'string', 'max' => 255],
            [['jenis_kelamin', 'desa_pengantar'], 'string', 'max' => 10],
            [['lampiran_ktp'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['kades_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['kades_id' => 'id']],
            [['kasipel_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['kasipel_id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['kasipel_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['kasipel_id' => 'id']],
            [['camat_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['camat_id' => 'id']],
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
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'pekerjaan' => 'Pekerjaan',
            'agama' => 'Agama',
            'no_telp' => 'No Telp',
            'tujuan_pembuatan' => 'Tujuan Pembuatan',
            'lampiran_ktp' => 'Lampiran Ktp',
            'lampiran_kk' => 'Lampiran Kk',
            'lampiran_akte_kelahiran' => 'Lampiran Akte Kelahiran',
            'lampiran_pasfoto' => 'Lampiran Pasfoto',
            'desa_pengantar' => 'Desa Pengantar',
            'status' => 'Status',
            'flag' => 'Flag',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
            'approval_date_camat' => 'Approval Date Camat',
            'camat_id' => 'Camat ID',
            'approval_date_kasipel' => 'Approval Date Kasipel',
            'kasipel_id' => 'Kasipel ID',
        ];
    }

    public function getDataPenduduk()
    {
        return $this->hasOne(\backend\models\Penduduk::className(), ['id' => 'nik']);
    }

    public function getKades()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'kades_id']);
    }
    
    public function getKasipel()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'kasipel_id']);
    }
    
   public function getStatus1()
   {
       return $this->hasOne(StatusSuratKeterangan::className(), ['id' => 'status']);
   }
}
