<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property string $waktu_transaksi
 * @property int $id_member
 * @property int $id_petugas
 * @property string $kode_obat
 * @property int $jumlah_beli
 *
 * @property Pembeli $member
 * @property Petugas $petugas
 * @property Obat $kodeObat
 * @property TransaksiObat[] $transaksiObats
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waktu_transaksi', 'id_petugas', 'kode_obat', 'jumlah_beli'], 'required'],
            [['waktu_transaksi'], 'safe'],
            [['id_member', 'id_petugas', 'jumlah_beli'], 'integer'],
            [['kode_obat'], 'string', 'max' => 10],
            [['id_member'], 'exist', 'skipOnError' => true, 'targetClass' => Pembeli::className(), 'targetAttribute' => ['id_member' => 'id_member']],
            [['id_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['id_petugas' => 'id_petugas']],
            [['kode_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::className(), 'targetAttribute' => ['kode_obat' => 'kode_obat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'waktu_transaksi' => 'Waktu Transaksi',
            'id_member' => 'Id Member',
            'id_petugas' => 'Id Petugas',
            'kode_obat' => 'Kode Obat',
            'jumlah_beli' => 'Jumlah Beli',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Pembeli::className(), ['id_member' => 'id_member']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugas()
    {
        return $this->hasOne(Petugas::className(), ['id_petugas' => 'id_petugas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeObat()
    {
        return $this->hasOne(Obat::className(), ['kode_obat' => 'kode_obat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiObats()
    {
        return $this->hasMany(TransaksiObat::className(), ['id_transaksi' => 'id_transaksi']);
    }
}
