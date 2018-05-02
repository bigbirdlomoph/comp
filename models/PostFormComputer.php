<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormComputer;

/**
 * PostFormComputer represents the model behind the search form about `app\models\FormComputer`.
 */
class PostFormComputer extends FormComputer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['project_name', 'year_budget', 'year_month', 'hoscode', 'cupcode', 'distid', 'hw_id', 'quantity', 'price', 'sum_price', 'new_hw', 'replace_hw', 'year_install', 'note'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = FormComputer::find();

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

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'year_budget', $this->year_budget])
            ->andFilterWhere(['like', 'year_month', $this->year_month])
            ->andFilterWhere(['like', 'hoscode', $this->hoscode])
            ->andFilterWhere(['like', 'cupcode', $this->cupcode])
            ->andFilterWhere(['like', 'distid', $this->distid])
            ->andFilterWhere(['like', 'hw_id', $this->hw_id])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'sum_price', $this->sum_price])
            ->andFilterWhere(['like', 'new_hw', $this->new_hw])
            ->andFilterWhere(['like', 'replace_hw', $this->replace_hw])
            ->andFilterWhere(['like', 'year_install', $this->year_install])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
