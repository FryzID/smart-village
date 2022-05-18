<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property int $id
 * @property string $perihal
 * @property string $isi
 * @property string $tgl_pengumuman
 */
class Pengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['perihal', 'isi', 'tgl_pengumuman'], 'required'],
            [['isi'], 'string'],
            [['tgl_pengumuman'], 'safe'],
            [['perihal'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'perihal' => 'Perihal',
            'isi' => 'Isi',
            'tgl_pengumuman' => 'Tgl Pengumuman',
        ];
    }
}
