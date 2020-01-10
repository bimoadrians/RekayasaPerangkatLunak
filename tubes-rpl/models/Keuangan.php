<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Keuangan".
 *
 * @property string $tanggal
 * @property string $omzet
 * @property string $harga_pokok
 * @property string $laba
 */
class Keuangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Keuangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['omzet', 'harga_pokok', 'laba'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'omzet' => 'Omzet',
            'harga_pokok' => 'Harga Pokok',
            'laba' => 'Laba',
        ];
    }
}
