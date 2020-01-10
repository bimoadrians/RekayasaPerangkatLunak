<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Obat;

/**
 * ObatSearch represents the model behind the search form of `app\models\Obat`.
 */
class ObatSearch extends Obat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'nama_obat', 'produsen_obat'], 'safe'],
            [['stok', 'harga_jual', 'harga_beli'], 'integer'],
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
        $query = Obat::find();

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
            'stok' => $this->stok,
            'harga_jual' => $this->harga_jual,
            'harga_beli' => $this->harga_beli,
        ]);

        $query->andFilterWhere(['like', 'kode_obat', $this->kode_obat])
            ->andFilterWhere(['like', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['like', 'produsen_obat', $this->produsen_obat]);

        return $dataProvider;
    }
}