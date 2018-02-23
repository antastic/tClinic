<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patient;

/**
 * patientSearch represents the model behind the search form about `app\models\Patient`.
 */
class patientSearch extends Patient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pt_id'], 'integer'],
            [['ptName', 'ptLname', 'ptAddress', 'pt_phone', 'pt_dad', 'pt_mom', 'pt_blood', 'pt_bloodtype', 'pt_drug', 'pt_dx', 'pt_sex', 'pt_bd', 'pt_cid', 'pt_datail'], 'safe'],
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
        $query = Patient::find();

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
            'pt_id' => $this->pt_id,
            'pt_bd' => $this->pt_bd,
        ]);

        $query->andFilterWhere(['like', 'ptName', $this->ptName])
            ->andFilterWhere(['like', 'ptLname', $this->ptLname])
            ->andFilterWhere(['like', 'ptAddress', $this->ptAddress])
            ->andFilterWhere(['like', 'pt_phone', $this->pt_phone])
            ->andFilterWhere(['like', 'pt_dad', $this->pt_dad])
            ->andFilterWhere(['like', 'pt_mom', $this->pt_mom])
            ->andFilterWhere(['like', 'pt_blood', $this->pt_blood])
            ->andFilterWhere(['like', 'pt_bloodtype', $this->pt_bloodtype])
            ->andFilterWhere(['like', 'pt_drug', $this->pt_drug])
            ->andFilterWhere(['like', 'pt_dx', $this->pt_dx])
            ->andFilterWhere(['like', 'pt_sex', $this->pt_sex])
            ->andFilterWhere(['like', 'pt_cid', $this->pt_cid])
            ->andFilterWhere(['like', 'pt_datail', $this->pt_datail]);

        return $dataProvider;
    }
}
