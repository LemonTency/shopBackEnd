<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Activity;

/**
 * ActivitySearch represents the model behind the search form of `app\models\Activity`.
 */
class ActivitySearch extends Activity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actId', 'activitySales', 'is_del'], 'integer'],
            [['store', 'activity', 'imgUrl', 'timeStart', 'timeEnd', 'activityDetail'], 'safe'],
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
        $query = Activity::find();

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
            'actId' => $this->actId,
            'timeStart' => $this->timeStart,
            'timeEnd' => $this->timeEnd,
            'activitySales' => $this->activitySales,
            'is_del' => $this->is_del,
        ]);

        $query->andFilterWhere(['like', 'store', $this->store])
            ->andFilterWhere(['like', 'activity', $this->activity])
            ->andFilterWhere(['like', 'imgUrl', $this->imgUrl])
            ->andFilterWhere(['like', 'activityDetail', $this->activityDetail]);

        return $dataProvider;
    }
}
