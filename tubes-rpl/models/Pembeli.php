<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property int $id_member
 * @property string $nama_member
 * @property string $alamat
 *
 * @property Transaksi[] $transaksis
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_member', 'alamat'], 'required'],
            [['nama_member'], 'string', 'max' => 35],
            [['alamat'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_member' => 'Id Member',
            'nama_member' => 'Nama Member',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_member' => 'id_member']);
    }
}
