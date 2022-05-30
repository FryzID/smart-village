<?php

namespace backend\models;

use backend\models\surat\SuratKelahiran;
use backend\models\surat\SuratKematian;
use backend\models\surat\SuratKeteranganDesa;
use backend\models\surat\SuratKeteranganMiskin;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $roles_id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string|null $password_reset_token
 * @property string $access_token
 * @property string $email
 * @property string $photo
 * @property string $last_login
 * @property int|null $penduduk_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property LaporAduan[] $laporAduans
 * @property LaporAduan[] $laporAduans0
 * @property Mitra[] $mitras
 * @property Pembangunan[] $pembangunans
 * @property Pembangunan[] $pembangunans0
 * @property Pembangunan[] $pembangunans1
 * @property Penduduk $penduduk
 * @property RequestPembangunan[] $requestPembangunans
 * @property SuratKelahiran[] $suratKelahirans
 * @property SuratKematian[] $suratKematians
 * @property SuratKeteranganDesa[] $suratKeteranganDesas
 * @property SuratKeteranganMiskin[] $suratKeteranganMiskins
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'auth_key'], 'required'],
            [['roles_id', 'penduduk_id'], 'integer'],
            [['last_login', 'created_at', 'updated_at'], 'safe'],
            [['name', 'password', 'password_reset_token', 'access_token', 'email'], 'string', 'max' => 255],
            [['username'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique'],
            [['photo'], 'file', 'skipOnEmpty' => true,'extensions' => 'jpg, png, jpeg',],
            [['penduduk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Penduduk::className(), 'targetAttribute' => ['penduduk_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roles_id' => 'Roles ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'access_token' => 'Access Token',
            'email' => 'Email',
            'photo' => 'Photo',
            'last_login' => 'Last Login',
            'penduduk_id' => 'Penduduk ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[LaporAduans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporAduans()
    {
        return $this->hasMany(LaporAduan::className(), ['users_id' => 'id']);
    }

    /**
     * Gets query for [[Mitras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMitras()
    {
        return $this->hasMany(Mitra::className(), ['users_id' => 'id']);
    }

    /**
     * Gets query for [[Pembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans()
    {
        return $this->hasMany(Pembangunan::className(), ['users_id' => 'id']);
    }

    /**
     * Gets query for [[Penduduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduk()
    {
        return $this->hasOne(Penduduk::className(), ['id' => 'penduduk_id']);
    }

    /**
     * Gets query for [[RequestPembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequestPembangunans()
    {
        return $this->hasMany(RequestPembangunan::className(), ['users_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKelahirans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKelahirans()
    {
        return $this->hasMany(SuratKelahiran::className(), ['kades_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKematians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKematians()
    {
        return $this->hasMany(SuratKematian::className(), ['kades_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKeteranganDesas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganDesas()
    {
        return $this->hasMany(SuratKeteranganDesa::className(), ['kades_id' => 'id']);
    }

    /**
     * Gets query for [[SuratKeteranganMiskins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganMiskins()
    {
        return $this->hasMany(SuratKeteranganMiskin::className(), ['kades_id' => 'id']);
    }

    
    /**
     * Gets query for [[Roles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(Roles::className(), ['roles_id' => 'id']);
    }
}
