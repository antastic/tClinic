<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Drugitem;

/**
 * DrugitemSearch represents the model behind the search form of `app\models\Drugitem`.
 */
class DrugitemSearch extends Drugitem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_id', 'drug_id', 'in_amount'], 'integer'],
            [['ip_date', 'in_unit', 'ip_exp', 'ip_status'], 'safe'],
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
        $query = Drugitem::find();

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
            'ip_id' => $this->ip_id,
            'ip_date' => $this->ip_date,
            'drug_id' => $this->drug_id,
            'in_amount' => $this->in_amount,
            'ip_exp' => $this->ip_exp,
        ]);

        $query->andFilterWhere(['like', 'in_unit', $this->in_unit])
            ->andFilterWhere(['like', 'ip_status', $this->ip_status]);

        return $dataProvider;
    }
}
