<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rt_rw".
 *
 * @property int $id
 * @property string $rw_parent
 * @property int $rt_child
 * @property int $dusun_id
 *
 * @property Dusun $dusun
 * @property Penduduk[] $penduduks
 * @property Penduduk[] $penduduks0
 */
class RtRw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rt_rw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rw_parent', 'rt_child', 'dusun_id'], 'required'],
            [['rt_child', 'dusun_id'], 'integer'],
            [['rw_parent'], 'string', 'max' => 5],
            [['dusun_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Dusun::className(), 'targetAttribute' => ['dusun_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rw_parent' => 'Rw',
            'rt_child' => 'Rt',
            'dusun_id' => 'Dusun',
        ];
    }

    /**
     * Gets query for [[Dusun]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDusun()
    {
        return $this->hasOne(Dusun::className(), ['id' => 'dusun_id']);
    }

    /**
     * Gets query for [[Penduduks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks()
    {
        return $this->hasMany(Penduduk::className(), ['rt_rw_id' => 'id']);
    }

    /**
     * Gets query for [[Penduduks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenduduks0()
    {
        return $this->hasMany(Penduduk::className(), ['rt_rw_id' => 'id']);
    }
}
