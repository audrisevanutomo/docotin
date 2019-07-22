<?php

namespace app\controllers;

use yii;
	use yii\web\Controller;
	use app\models\LoginForm;
	use app\models\BackedUser;
	use app\models\Transaksi;
    use app\models\TransaksiSearch;
    use yii\data\Pagination;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    	public function actionList(){
    		$list = Transaksi::find();
            //unfinished pagination. fix it or leave it
            $pages = new Pagination([
                    'defaultPageSize'=>7,
                    'totalCount'=>count($list),
                    ]);
            $models = $list->orderBy('id_topup')
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            if(Yii::$app->user->identity->id_grup==2){
                return $this->redirect(['site/index']);
                }
            // var_dump($list[0]->backedUser);exit;
        	// $user = $list->backedUser;
    		return $this->render('list',[
                'models'=>$models,
                'pages'=>$pages,
                'list'=>$list,
            ]);
    	} 

        public function actionDetail($id){
            $detail = BackedUser::findOne($id);
            $model = $detail->transaksi;
            $status = $model->status;
            return $this->render('detail',['detail'=>$detail,'model'=>$model,'status'=>$status]);
        }
}
