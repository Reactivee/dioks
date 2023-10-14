<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderAbout;

/**
 * OrderAboutSearch represents the model behind the search form of `common\models\OrderAbout`.
 */
class OrderAboutSearch extends OrderAbout
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'delivery_time', 'created_at', 'updated_at'], 'integer'],
            [['country', 'name_ru', 'name_uz', 'name_en', 'region', 'order_code', 'long', 'lat', 'truck_id'], 'safe'],
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
        $query = OrderAbout::find();

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
            'delivery_time' => $this->delivery_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'order_code', $this->order_code])
            ->andFilterWhere(['like', 'long', $this->long])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'truck_id', $this->truck_id]);

        return $dataProvider;
    }
}
