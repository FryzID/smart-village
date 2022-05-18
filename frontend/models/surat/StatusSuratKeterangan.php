<?php

namespace frontend\models\surat;

use Yii;

/**
 * This is the model class for table "status_surat_keterangan".
 *
 * @property int $id
 * @property string $nama
 * @property int $roles_id
 */
class StatusSuratKeterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_surat_keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'roles_id'], 'required'],
            [['roles_id'], 'integer'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'roles_id' => 'Roles ID',
        ];
    }
}
