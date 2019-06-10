<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CoOffice;

/**
 * CoOfficeSearch represents the model behind the search form of `app\models\CoOffice`.
 */
class CoOfficeSearch extends CoOffice
{
    /**
     * {@inheritdoc}
     */
    public $q;

    public function rules()
    {
        return [
            [['off_id', 'off_name', 'off_type', 
            'provid', 'distname', 'distid', 'subdistid', 'villid', 
            'villno', 'postcode', 'cup_name', 'cup_code', 'pcu_code', 
            'pointx', 'pointy', 'status', 'updatedate', 'q'], 'safe'],
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
        $query = CoOffice::find();

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
            //'id' => $this->id,
            //'off_id' => $this->off_id,
        ]);

        //$query->andFilterWhere(['like', 'off_id', $this->off_id])
        //->andFilterWhere(['like', 'off_name', $this->off_name])
       //     ->andFilterWhere(['like', 'off_type', $this->off_type])
       //     ->andFilterWhere(['like', 'provid', $this->provid])
       //     ->andFilterWhere(['like', 'distid', $this->distid])
       //     ->andFilterWhere(['like', 'subdistid', $this->subdistid])
       //     ->andFilterWhere(['like', 'villid', $this->villid])
       //     ->andFilterWhere(['like', 'villno', $this->villno])
       //     ->andFilterWhere(['like', 'postcode', $this->postcode])
       //     ->andFilterWhere(['like', 'cup_code', $this->cup_code])
       //     ->andFilterWhere(['like', 'pcu_code', $this->pcu_code])
       //     ->andFilterWhere(['like', 'pointx', $this->pointx])
       //     ->andFilterWhere(['like', 'pointy', $this->pointy])
       //     ->andFilterWhere(['like', 'status', $this->status]);
            
            $query->orFilterWhere(['like', 'off_name', $this->q]);

        return $dataProvider;
    }
}
