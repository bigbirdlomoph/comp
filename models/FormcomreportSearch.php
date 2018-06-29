<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormComReport;

/**
 * FormcomreportSearch represents the model behind the search form about `app\models\FormComReport`.
 */
class FormcomreportSearch extends FormComReport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qty'], 'integer'],
            [['hoscode', 'hw_id', 'hw_detail', 'year_budget', 'project_name', 'report', 'recognize', 'allocate', 'unit', 'summary', 'company', 'brand', 'reference'], 'safe'],
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
        $query = FormComReport::find();

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
            'qty' => $this->qty,
        ]);

        $query->andFilterWhere(['like', 'hoscode', $this->hoscode])
            ->andFilterWhere(['like', 'hw_id', $this->hw_id])
            ->andFilterWhere(['like', 'hw_detail', $this->hw_detail])
            ->andFilterWhere(['like', 'report', $this->report])
            ->andFilterWhere(['like', 'recognize', $this->recognize])
            ->andFilterWhere(['like', 'allocate', $this->allocate])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'brand', $this->brand]);

        return $dataProvider;
    }
}
