<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Order;

/**
 * OrderSearch represents the model behind the search form of `common\models\order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'cargo_type', 'cargo_from_location', 'cargo_to_location', 'currently_location', 'delivery_time', 'created_at', 'updated_at', 'whom', 'how', 'mass', 'order_code'], 'safe'],
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
        $query = Order::find();

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
            'id' => $this->id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'cargo_type', $this->cargo_type])
            ->andFilterWhere(['like', 'cargo_from_location', $this->cargo_from_location])
            ->andFilterWhere(['like', 'cargo_to_location', $this->cargo_to_location])
            ->andFilterWhere(['like', 'currently_location', $this->currently_location])
            ->andFilterWhere(['like', 'delivery_time', $this->delivery_time])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at])
            ->andFilterWhere(['like', 'whom', $this->whom])
            ->andFilterWhere(['like', 'how', $this->how])
            ->andFilterWhere(['like', 'mass', $this->mass])
            ->andFilterWhere(['like', 'order_code', $this->order_code]);

        return $dataProvider;
    }
}
