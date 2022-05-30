<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request_pembangunan".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $longitute
 * @property string $latitude
 * @property int $users_id
 * @property int $kategori_pembangunan_id
 * @property string $statu
 * @property string $created_at
 * @property string $updated_at
 *
 * @property KategoriPembangunan $kategoriPembangunan
 * @property Users $users
 */
class RequestPembangunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request_pembangunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'longitute', 'latitude', 'users_id', 'kategori_pembangunan_id', 'status'], 'required'],
            [['deskripsi', 'status'], 'string'],
            [['users_id', 'kategori_pembangunan_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 45],
            [['longitute', 'latitude'], 'string', 'max' => 100],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['users_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'longitute' => 'Longitute',
            'latitude' => 'Latitude',
            'users_id' => 'Users ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'status' => 'Status',
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
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'users_id']);
    }
}
