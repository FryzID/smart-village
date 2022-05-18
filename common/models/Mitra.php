<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mitra".
 *
 * @property int $id
 * @property string $nama_mitra
 * @property string $alamat
 * @property string $no_telp
 * @property string $email
 * @property int $users_id
 *
 * @property Pembangunan[] $pembangunans
 * @property Users $users
 */
class Mitra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mitra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_mitra', 'alamat', 'no_telp', 'email', 'users_id'], 'required'],
            [['alamat'], 'string'],
            [['users_id'], 'integer'],
            [['nama_mitra', 'email'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_mitra' => 'Nama Mitra',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            'users_id' => 'Users ID',
        ];
    }

    /**
     * Gets query for [[Pembangunans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunans()
    {
        return $this->hasMany(Pembangunan::className(), ['mitra_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }
}
