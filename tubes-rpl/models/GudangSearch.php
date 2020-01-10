<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gudang;

/**
 * GudangSearch represents the model behind the search form of `app\models\Gudang`.
 */
class GudangSearch extends Gudang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat'], 'safe'],
            [['stok'], 'integer'],
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
        $query = Gudang::find();

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
        ]);

        $query->andFilterWhere(['like', 'kode_obat', $this->kode_obat])
            ->andFilterWhere(['like', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['like', 'produsen_obat', $this->produsen_obat]);

        return $dataProvider;
    }
}