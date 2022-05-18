<?php

namespace frontend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_keterangan_desa".
 *
 * @property int $id
 * @property int $judul_surat
 * @property string $no_surat
 * @property int $kades_id
 * @property string $nik
 * @property string $no_telp
 * @property string $keterangan
 * @property string $keperluan
 * @property string $lampiran_ktp
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $status
 * @property int $flag
 * @property string $desa_pengantar
 * @property string $approval_date_kades
 *
 * @property User $kades
 * @property StatusSurat $status0
 */
class SuratKeteranganDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keterangan_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_surat', 'nik', 'no_telp', 'keterangan', 'keperluan', 'lampiran_ktp'], 'required'],
            [['judul_surat', 'kades_id', 'created_by', 'updated_by', 'status', 'flag'], 'integer'],
            [['keterangan'], 'string'],
            [['created_at', 'updated_at', 'approval_date_kades'], 'safe'],
            [['no_surat'], 'string', 'max' => 50],
            [['nik', 'no_telp'], 'string', 'max' => 20],
            [['keperluan'], 'string', 'max' => 255],
            [['lampiran_ktp'], 'string', 'max' => 100],
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
            'judul_surat' => 'Judul Surat',
            'no_surat' => 'No Surat',
            'kades_id' => 'Kades ID',
            'nik' => 'Nik',
            'no_telp' => 'No Telp',
            'keterangan' => 'Keterangan',
            'keperluan' => 'Keperluan',
            'lampiran_ktp' => 'Lampiran Ktp',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'status' => 'Status',
            'flag' => 'Flag',
            'desa_pengantar' => 'Desa Pengantar',
            'approval_date_kades' => 'Approval Date Kades',
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

    public function getPelapor()
    {
        return $this->hasOne(\common\models\User::classname(), ['id' => 'created_by']);
    }


    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusSurat()
    {
        return $this->hasOne(StatusSurat::className(), ['id' => 'status']);
    }
}
