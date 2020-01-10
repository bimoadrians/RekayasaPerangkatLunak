<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posisi".
 *
 * @property int $id 0 = admin. 1 = petugas gudang, 2 = petugas kasir
 * @property string $nama
 *
 * @property Login[] $logins
 */
class Posisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama'], 'required'],
            [['id'], 'integer'],
            [['nama'], 'string', 'max' => 15],
            [['id'], 'unique'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogins()
    {
        return $this->hasMany(Login::className(), ['tipe' => 'id']);
    }
}
