<?php

namespace app\modules\pembeli\controllers;

use yii\web\Controller;

/**
 * Default controller for the `pembeli` module
 */
class PemesananController extends Controller
{
	public $layout = 'pembeli';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail()
    {
        return $this->render('detail');
    }
    public function actionKeranjang()
    {
        return $this->render('keranjang');
    }
    public function actionDetailData()
    {
        return $this->render('detaildata'); 
    }
    public function actionUbahDetailData()
    {
        return $this->render('ubahdetaildata');
    }
    public function actionListPemesanan()
    {
        return $this->render('listpemesanan');
    }
    public function actionDetailPesanan()
    {
        return $this->render('detailpesanan');
    }
    public function actionA()
    {
        return $this->render('a');
    }
}
