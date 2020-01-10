<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $kode_obat
 * @property int $stok
 */
class Gudang extends \yii\db\ActiveRecord
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
            [['kode_obat', 'stok'], 'required'],
            [['stok'], 'integer'],
            [['kode_obat'], 'string', 'max' => 10],
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
            'stok' => 'Jumlah Total Stok Obat Sekarang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiObats()
    {
        return $this->hasMany(TransaksiObat::className(), ['kode_obat' => 'stok']);
    }
}