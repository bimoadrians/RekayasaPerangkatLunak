<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `app\models\Transaksi`.
 */
class TransaksiSearch extends Transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_member', 'id_petugas', 'jumlah_beli'], 'integer'],
            [['waktu_transaksi', 'kode_obat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Transaksi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_transaksi' => $this->id_transaksi,
            'waktu_transaksi' => $this->waktu_transaksi,
            'id_member' => $this->id_member,
            'id_petugas' => $this->id_petugas,
            'jumlah_beli' => $this->jumlah_beli,
        ]);

        $query->andFilterWhere(['like', 'kode_obat', $this->kode_obat]);

        return $dataProvider;
    }
}
