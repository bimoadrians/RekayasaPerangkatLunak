<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi_obat".
 *
 * @property int $id
 * @property string $kode_obat
 * @property int $jumlah_beli
 * @property string $waktu_transaksi
 * @property int $id_transaksi
 *
 * @property Transaksi $transaksi
 */
class TransaksiObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'jumlah_beli', 'waktu_transaksi', 'id_transaksi'], 'required'],
            [['jumlah_beli', 'id_transaksi'], 'integer'],
            [['waktu_transaksi'], 'safe'],
            [['kode_obat'], 'string', 'max' => 10],
            [['id_transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['id_transaksi' => 'id_transaksi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'jumlah_beli' => 'Jumlah Beli',
            'waktu_transaksi' => 'Waktu Transaksi',
            'id_transaksi' => 'Id Transaksi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_transaksi' => 'id_transaksi']);
    }
}
