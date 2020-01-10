<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $id_petugas
 * @property int $tipe
 *
 * @property Petugas $petugas
 * @property Posisi $tipe0
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password', 'tipe'], 'required'],
            [['id', 'id_petugas', 'tipe'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 144],
            [['username'], 'unique'],
            [['id'], 'unique'],
            [['id_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['id_petugas' => 'id_petugas']],
            [['tipe'], 'exist', 'skipOnError' => true, 'targetClass' => Posisi::className(), 'targetAttribute' => ['tipe' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'id_petugas' => 'Id Petugas',
            'tipe' => 'Tipe',
        ];
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
    public function getTipe0()
    {
        return $this->hasOne(Posisi::className(), ['id' => 'tipe']);
    }
}
