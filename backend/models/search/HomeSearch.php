<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Home;

/**
 * HomeSearch represents the model behind the search form of `app\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'country_id', 'region_id', 'district_id', 'room_id', 'floor_id', 'full_floor', 'tell', 'video_cam', 'cable', 'tv', 'muzlatgich', 'candinsaner'], 'integer'],
            [['name', 'cost', 'full_ground', 'live_ground', 'build_product', 'status_home', 'description', 'fio', 'm_tel', 'm_email', 'image'], 'safe'],
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
        $query = Home::find();

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
            'category_id' => $this->category_id,
            'country_id' => $this->country_id,
            'region_id' => $this->region_id,
            'district_id' => $this->district_id,
            'room_id' => $this->room_id,
            'floor_id' => $this->floor_id,
            'full_floor' => $this->full_floor,
            'tell' => $this->tell,
            'video_cam' => $this->video_cam,
            'cable' => $this->cable,
            'tv' => $this->tv,
            'muzlatgich' => $this->muzlatgich,
            'candinsaner' => $this->candinsaner,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'cost', $this->cost])
            ->andFilterWhere(['like', 'full_ground', $this->full_ground])
            ->andFilterWhere(['like', 'live_ground', $this->live_ground])
            ->andFilterWhere(['like', 'build_product', $this->build_product])
            ->andFilterWhere(['like', 'status_home', $this->status_home])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'm_tel', $this->m_tel])
            ->andFilterWhere(['like', 'm_email', $this->m_email])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
