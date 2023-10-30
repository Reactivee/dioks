<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Settings;

/**
 * SettingsSearch represents the model behind the search form of `common\models\Settings`.
 */
class SettingsSearch extends Settings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['key_uz', 'key_ru', 'key_en', 'site_name_uz', 'site_name_ru', 'site_name_en', 'desc_uz', 'desc_en', 'desc_ru', 'tg', 'facebook', 'instagram'], 'safe'],
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
        $query = Settings::find();

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
        ]);

        $query->andFilterWhere(['like', 'key_uz', $this->key_uz])
            ->andFilterWhere(['like', 'key_ru', $this->key_ru])
            ->andFilterWhere(['like', 'key_en', $this->key_en])
            ->andFilterWhere(['like', 'site_name_uz', $this->site_name_uz])
            ->andFilterWhere(['like', 'site_name_ru', $this->site_name_ru])
            ->andFilterWhere(['like', 'site_name_en', $this->site_name_en])
            ->andFilterWhere(['like', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['like', 'desc_en', $this->desc_en])
            ->andFilterWhere(['like', 'desc_ru', $this->desc_ru])
            ->andFilterWhere(['like', 'tg', $this->tg])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'instagram', $this->instagram]);

        return $dataProvider;
    }
}
