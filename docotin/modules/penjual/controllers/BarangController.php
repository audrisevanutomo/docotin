<?php

namespace app\modules\penjual\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class BarangController extends Controller
{
	public $layout = 'penjual';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListBarang()
    {
        return $this->render('listbarang');
    }
    public function actionTambahBarang()
    {
        return $this->render('tambahdatabarang');
    }
    public function actionEditBarang()
    {
        return $this->render('editdatabarang');
    }
    
}
