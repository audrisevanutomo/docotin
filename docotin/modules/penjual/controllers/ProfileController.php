<?php

namespace app\modules\penjual\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class ProfileController extends Controller
{
	public $layout = 'penjual';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListPenarikan()
    {
        return $this->render('listpenarikan');
    }
    public function actionDetailPenarikan()
    {
        return $this->render('detailpenarikan');
    }
    public function actionProfile()
    {
        return $this->render('profile');
    }
    
}
