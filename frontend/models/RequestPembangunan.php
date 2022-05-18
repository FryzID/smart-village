<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "request_pembangunan".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
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
            [['judul', 'deskripsi', 'users_id', 'kategori_pembangunan_id', 'statu'], 'required'],
            [['deskripsi', 'statu'], 'string'],
            [['users_id', 'kategori_pembangunan_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 45],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['users_id' => 'id']],
            [['kategori_pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\KategoriPembangunan::className(), 'targetAttribute' => ['kategori_pembangunan_id' => 'id']],
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
            'users_id' => 'Users ID',
            'kategori_pembangunan_id' => 'Kategori Pembangunan ID',
            'statu' => 'Status',
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
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }
}
