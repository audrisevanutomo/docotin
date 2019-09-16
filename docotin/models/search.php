<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transaksi;
use app\models\BackedUser;

/**
 * MakananSearch represents the model behind the search form of `app\models\Makanan`.
 */
class Search extends Transaksi
{
    public $nama_lengkap;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_topup','status_topup'], 'integer'],
            [['nama_lengkap'],'string']
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
        $query = Transaksi::find();
            // $query ->select(['user.nama_lengkap AS nama','transaksi.id_user AS id'])
            //        ->from('user')
            //        ->leftJoin('transaksi','transaksi.createdby = user.id_user');

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

        // $query->FilterWhere([
        //     'like', 'id_topup', $this->id_topup,
        // ]);

        // $query->FilterWhere([
        //    'like', 'status_topup'=>$this->status_topup,
        // ]);
        return $dataProvider;
    }
}
