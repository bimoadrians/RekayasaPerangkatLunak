<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property int $id_petugas
 * @property string $nama_petugas
 * @property string $alamat
 *
 * @property Login[] $logins
 * @property Transaksi[] $transaksis
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_petugas', 'nama_petugas', 'alamat'], 'required'],
            [['id_petugas'], 'integer'],
            [['nama_petugas'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 50],
            [['id_petugas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_petugas' => 'Id Petugas',
            'nama_petugas' => 'Nama Petugas',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogins()
    {
        return $this->hasMany(Login::className(), ['id_petugas' => 'id_petugas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_petugas' => 'id_petugas']);
    }
}
