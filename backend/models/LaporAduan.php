<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lapor_aduan".
 *
 * @property int $id
 * @property string $foto
 * @property string $deskripsi
 * @property int $users_id
 * @property int $pembangunan_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Pembangunan $pembangunan
 * @property User $users
 */
class LaporAduan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lapor_aduan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto', 'deskripsi', 'users_id', 'pembangunan_id', 'status'], 'required'],
            [['deskripsi', 'status'], 'string'],
            [['users_id', 'pembangunan_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['foto'], 'string', 'max' => 255],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['users_id' => 'id']],
            [['pembangunan_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Pembangunan::className(), 'targetAttribute' => ['pembangunan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'users_id' => 'Users ID',
            'pembangunan_id' => 'Pembangunan ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Pembangunan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunan()
    {
        return $this->hasOne(\common\models\Pembangunan::className(), ['id' => 'pembangunan_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'users_id']);
    }
}
