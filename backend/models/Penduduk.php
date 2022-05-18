<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penduduk".
 *
 * @property int $id
 * @property string $nik
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property int $agama_id
 * @property string $status_perkawinan
 * @property int $pekerjaan_id
 * @property int $pendidikan_id
 * @property int $rt_rw_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Agama $agama
 * @property Pekerjaan $pekerjaan
 * @property Pendidikan $pendidikan
 * @property RtRw $rtRw
 * @property User[] $users
 */
class Penduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama_id', 'status_perkawinan', 'pekerjaan_id', 'pendidikan_id', 'rt_rw_id'], 'required'],
            [['tanggal_lahir', 'created_at', 'updated_at'], 'safe'],
            [['jenis_kelamin', 'status_perkawinan'], 'string'],
            [['agama_id', 'pekerjaan_id', 'pendidikan_id', 'rt_rw_id'], 'integer'],
            [['nik'], 'string', 'max' => 20],
            [['nama_lengkap'], 'string', 'max' => 100],
            [['tempat_lahir'], 'string', 'max' => 50],
            [['agama_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Agama::className(), 'targetAttribute' => ['agama_id' => 'id']],
            [['pekerjaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Pekerjaan::className(), 'targetAttribute' => ['pekerjaan_id' => 'id']],
            [['rt_rw_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\RtRw::className(), 'targetAttribute' => ['rt_rw_id' => 'id']],
            [['pendidikan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Pendidikan::className(), 'targetAttribute' => ['pendidikan_id' => 'id']],
            [['pekerjaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Pekerjaan::className(), 'targetAttribute' => ['pekerjaan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nik' => 'Nik',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama_id' => 'Agama ID',
            'status_perkawinan' => 'Status Perkawinan',
            'pekerjaan_id' => 'Pekerjaan ID',
            'pendidikan_id' => 'Pendidikan ID',
            'rt_rw_id' => 'Rt Rw ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Agama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(\common\models\Agama::className(), ['id' => 'agama_id']);
    }

    /**
     * Gets query for [[Pekerjaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaan()
    {
        return $this->hasOne(\common\models\Pekerjaan::className(), ['id' => 'pekerjaan_id']);
    }

    /**
     * Gets query for [[Pendidikan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan()
    {
        return $this->hasOne(\common\models\Pendidikan::className(), ['id' => 'pendidikan_id']);
    }

    /**
     * Gets query for [[RtRw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRtRw()
    {
        return $this->hasOne(\common\models\RtRw::className(), ['id' => 'rt_rw_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(\common\models\User::className(), ['penduduk_id' => 'id']);
    }
}
