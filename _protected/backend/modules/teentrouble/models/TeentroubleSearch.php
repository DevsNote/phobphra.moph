<?php

namespace backend\modules\teentrouble\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teentrouble;

/**
 * TeentroubleSearch represents the model behind the search form of `common\models\Teentrouble`.
 */
class TeentroubleSearch extends Teentrouble
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teen_trouble_type_id', 'answer_by', 'approve_post'], 'integer'],
            [['title', 'detail', 'email', 'facebook', 'nickname', 'post_ip', 'created_at', 'answer_detail', 'answer_at'], 'safe'],
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
        $query = Teentrouble::find();

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
            'teen_trouble_type_id' => $this->teen_trouble_type_id,
            'created_at' => $this->created_at,
            'answer_by' => $this->answer_by,
            'answer_at' => $this->answer_at,
            'approve_post' => $this->approve_post,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'post_ip', $this->post_ip])
            ->andFilterWhere(['like', 'answer_detail', $this->answer_detail]);

        return $dataProvider;
    }
}
