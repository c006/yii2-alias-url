<?php

namespace c006\url\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * AliasUrlSearch represents the model behind the search form about `c006\url\models\AliasUrl`.
 */
class AliasUrlSearch extends AliasUrl
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['private', 'public'], 'safe'],
        ];
    }


    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = AliasUrl::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $query
            ->andFilterWhere(['id' => $this->id,])
            ->andFilterWhere(['like', 'private', $this->private])
            ->andFilterWhere(['like', 'public', $this->public]);

        return $dataProvider;
    }
}
