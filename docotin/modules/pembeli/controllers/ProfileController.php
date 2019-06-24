<?php

namespace app\modules\pembeli\controllers;

use yii\web\Controller;

/**
 * Default controller for the `pembeli` module
 */
class ProfileController extends Controller
{
	public $layout = 'pembeli';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionProfilePembeli()
    {
        return $this->render('profilepembeli');
    }
    public function actionListTopup()
    {
        return $this->render('listtopup');
    }
    public function actionDetailTopup()
    {
        return $this->render('detailtopup'); 
    }
}
