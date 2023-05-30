<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa052;

/**
 * Mahasiswa052Search represents the model behind the search form of `app\models\Mahasiswa052`.
 */
class Mahasiswa052Search extends Mahasiswa052
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['NomorIndukMahasiswa', 'NamaMahasiswa', 'Kelas', 'Status'], 'safe'],
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
        $query = Mahasiswa052::find();

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
            'Status' => $this->Status,
        ]);

        $query->andFilterWhere(['like', 'NomorIndukMahasiswa', $this->NomorIndukMahasiswa])
            ->andFilterWhere(['like', 'NamaMahasiswa', $this->NamaMahasiswa])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas]);

        return $dataProvider;
    }
}
