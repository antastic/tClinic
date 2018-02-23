<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Visit;

/**
 * VisitSearch represents the model behind the search form of `app\models\Visit`.
 */
class VisitSearch extends Visit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'visit_vts', 'visit_bpup', 'visit_bpdown', 'visit_higth', 'emp_id', 'pt_id'], 'integer'],
            [['datetimesv', 'visit_cc'], 'safe'],
            [['visit_weigth'], 'number'],
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
        $query = Visit::find();

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
            'datetimesv' => $this->datetimesv,
            'visit_vts' => $this->visit_vts,
            'visit_bpup' => $this->visit_bpup,
            'visit_bpdown' => $this->visit_bpdown,
            'visit_weigth' => $this->visit_weigth,
            'visit_higth' => $this->visit_higth,
            'emp_id' => $this->emp_id,
            'pt_id' => $this->pt_id,
        ]);

        $query->andFilterWhere(['like', 'visit_cc', $this->visit_cc]);

        return $dataProvider;
    }
}
