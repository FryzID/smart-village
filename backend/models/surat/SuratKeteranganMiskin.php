<?php

namespace backend\models\surat;

use Yii;

/**
 * This is the model class for table "surat_keterangan_miskin".
 *
 * @property int $id
 * @property string $no_surat
 * @property int $nik
 * @property string $no_telp
 * @property string $keterangan
 * @property string $surat_pernyataan_miskin
 * @property string $desa_pengantar
 * @property string $lampiran_ktp
 * @property string $lampiran_kk
 * @property int $status
 * @property int $flag
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $approval_date_kades
 * @property int $kades_id
 * @property string $approval_date_camat
 * @property int $camat_id
 *
 * @property User $kades
 * @property StatusSuratKeterangan $status0
 */
class SuratKeteranganMiskin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keterangan_miskin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'nik_id', 'no_telp', 'keterangan','created_by'], 'required'],
            [['nik_id', 'status', 'flag', 'created_by', 'updated_by', 'kades_id', 'camat_id'], 'integer'],
            [['keterangan'], 'string'],
            [['created_at', 'updated_at', 'approval_date_kades', 'approval_date_camat'], 'safe'],
            [['no_surat'], 'string', 'max' => 50],
            [['no_telp'], 'string', 'max' => 20],
            [['surat_pernyataan_miskin'], 'string', 'max' => 200],
            [['desa_pengantar'], 'string', 'max' => 10],
            [['lampiran_ktp', 'lampiran_kk'], 'string', 'max' => 100],
            [['lampiran_kk'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['kades_id'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\User::className(), 'targetAttribute' => ['kades_id' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusSuratKeterangan::className(), 'targetAttribute' => ['status' => 'id']],
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
            'nik_id' => 'Nik',
            'no_telp' => 'No Telp',
            'keterangan' => 'Keterangan',
            'surat_pernyataan_miskin' => 'Surat Pernyataan Miskin',
            'desa_pengantar' => 'Desa Pengantar',
            'lampiran_ktp' => 'Lampiran Ktp',
            'lampiran_kk' => 'Lampiran Kk',
            'status' => 'Status',
            'flag' => 'Flag',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'approval_date_kades' => 'Approval Date Kades',
            'kades_id' => 'Kades ID',
            'approval_date_camat' => 'Approval Date Camat',
            'camat_id' => 'Camat ID',
        ];
    }

    /**
     * Gets query for [[Kades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKades()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'kades_id']);
    }

    public function getPelapor()
    {
        return $this->hasOne(\common\models\User::classname(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus1()
    {
        return $this->hasOne(StatusSuratKeterangan::className(), ['id' => 'status']);
    }

    /**
     * Gets query for [[Kades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataPenduduk()
    {
        return $this->hasOne(\backend\models\Penduduk::className(), ['id' => 'nik_id']);
    }

    
}
