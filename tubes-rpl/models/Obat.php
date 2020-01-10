<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $kode_obat
 * @property string $nama_obat
 * @property string $produsen_obat
 * @property int $stok
 * @property int $harga_jual
 * @property int $harga_beli
 *
 * @property TransaksiObat[] $transaksiObats
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'nama_obat', 'produsen_obat', 'harga_jual', 'harga_beli'], 'required'],
            [['stok', 'harga_jual', 'harga_beli'], 'integer'],
            [['kode_obat'], 'string', 'max' => 10],
            [['nama_obat'], 'string', 'max' => 35],
            [['produsen_obat'], 'string', 'max' => 50],
            [['kode_obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_obat' => 'Kode Obat',
            'nama_obat' => 'Nama Obat',
            'produsen_obat' => 'Produsen Obat',
            'stok' => 'Stok',
            'harga_jual' => 'Harga Jual',
            'harga_beli' => 'Harga Beli',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiObats()
    {
        return $this->hasMany(TransaksiObat::className(), ['kode_obat' => 'kode_obat']);
    }
}
