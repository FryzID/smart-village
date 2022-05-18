<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dusun".
 *
 * @property int $id
 * @property string $nama_dusun
 *
 * @property RtRw[] $rtRws
 */
class Dusun extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dusun';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dusun'], 'required'],
            [['nama_dusun'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dusun' => 'Nama Dusun',
        ];
    }

    /**
     * Gets query for [[RtRws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRtRws()
    {
        return $this->hasMany(RtRw::className(), ['dusun_id' => 'id']);
    }
}
