<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dispense;

/**
 * DispenseSearch represents the model behind the search form of `app\models\Dispense`.
 */
class DispenseSearch extends Dispense
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vsd_id', 'drug_amount', 'drug_id', 'emp_id', 'service_id', 'Expenses_id'], 'integer'],
            [['drug_prices'], 'number'],
            [['vtd_unit'], 'safe'],
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
        $query = Dispense::find();

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
            'vsd_id' => $this->vsd_id,
            'drug_amount' => $this->drug_amount,
            'drug_prices' => $this->drug_prices,
            'drug_id' => $this->drug_id,
            'emp_id' => $this->emp_id,
            'service_id' => $this->service_id,
            'Expenses_id' => $this->Expenses_id,
        ]);

        $query->andFilterWhere(['like', 'vtd_unit', $this->vtd_unit]);

        return $dataProvider;
    }
}
