<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class OtherController extends Controller
{
	public $layout = 'admin';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionListUser()
    {
        return $this->render('user');
    }
}
