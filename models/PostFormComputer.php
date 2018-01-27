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
            [['project_name', 'year_budget', 'money_source', 'hoscode', 'cupcode', 'hw_id', 'procurement', 'location_ins', 'quantity', 'old_hw_name', 'post_old_hw', 'year_install', 'problem', 'description_hw', 'workload_hw', 'it_staff'], 'safe'],
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
            ->andFilterWhere(['like', 'money_source', $this->money_source])
            ->andFilterWhere(['like', 'hoscode', $this->hoscode])
            ->andFilterWhere(['like', 'cupcode', $this->cupcode])
            ->andFilterWhere(['like', 'hw_id', $this->hw_id])
            ->andFilterWhere(['like', 'procurement', $this->procurement])
            ->andFilterWhere(['like', 'location_ins', $this->location_ins])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'old_hw_name', $this->old_hw_name])
            ->andFilterWhere(['like', 'post_old_hw', $this->post_old_hw])
            ->andFilterWhere(['like', 'year_install', $this->year_install])
            ->andFilterWhere(['like', 'problem', $this->problem])
            ->andFilterWhere(['like', 'description_hw', $this->description_hw])
            ->andFilterWhere(['like', 'workload_hw', $this->workload_hw])
            ->andFilterWhere(['like', 'it_staff', $this->it_staff]);

        return $dataProvider;
    }
}
