<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ComHardware61;

/**
 * ComHardware61Search represents the model behind the search form of `app\models\ComHardware61`.
 */
class ComHardware61Search extends ComHardware61
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id'], 'integer'],
            //[['hw_id', 'hw_detail', 'unit', 'hw_group_id', 'hw_detail_id'], 'safe'],
            [['price'], 'number'],
            [['hw_detail'], 'safe'],
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
        $query = ComHardware61::find();

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
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'hw_id', $this->hw_id])
            ->andFilterWhere(['like', 'hw_detail', $this->hw_detail])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'hw_group_id', $this->hw_group_id])
            ->andFilterWhere(['like', 'hw_detail_id', $this->hw_detail_id]);

        return $dataProvider;
    }
}
