<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Complaint;

/**
 * ComplaintSearch represents the model behind the search form of `common\models\Complaint`.
 */
class ComplaintSearch extends Complaint
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'complaint_status'], 'integer'],
            [['complaint_name', 'complaint_tel', 'complaint_email', 'complaint_subject', 'complaint_detail', 'complaint_ip', 'created_at', 'complaint_answer', 'updated_at'], 'safe'],
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
        $query = Complaint::find();

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
            'created_at' => $this->created_at,
            'complaint_status' => $this->complaint_status,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'complaint_name', $this->complaint_name])
            ->andFilterWhere(['like', 'complaint_tel', $this->complaint_tel])
            ->andFilterWhere(['like', 'complaint_email', $this->complaint_email])
            ->andFilterWhere(['like', 'complaint_subject', $this->complaint_subject])
            ->andFilterWhere(['like', 'complaint_detail', $this->complaint_detail])
            ->andFilterWhere(['like', 'complaint_ip', $this->complaint_ip])
            ->andFilterWhere(['like', 'complaint_answer', $this->complaint_answer]);

        return $dataProvider;
    }
}
