<?php

namespace frontend\models\surat;

use Yii;

/**
 * This is the model class for table "status_surat".
 *
 * @property int $id
 * @property string $nama
 * @property int $roles_id
 *
 * @property SuratKelahiran[] $suratKelahirans
 * @property SuratKematian[] $suratKematians
 * @property SuratKeteranganDesa[] $suratKeteranganDesas
 */
class StatusSurat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_surat';
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

    /**
     * Gets query for [[SuratKelahirans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKelahirans()
    {
        return $this->hasMany(SuratKelahiran::className(), ['status' => 'id']);
    }

    /**
     * Gets query for [[SuratKematians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKematians()
    {
        return $this->hasMany(SuratKematian::className(), ['status' => 'id']);
    }

    /**
     * Gets query for [[SuratKeteranganDesas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeteranganDesas()
    {
        return $this->hasMany(SuratKeteranganDesa::className(), ['status' => 'id']);
    }
}
