<?php  
// 1711447  
namespace frontend\controllers;  
  
use yii\web\Controller;  
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use frontend\models\Danmus;

class DanmuController extends Controller  
{  
    // public function actionFun()  
    // {
    //     $query = danmus::find();
    //     $danmus = $query->orderBy('id')
    //         ->all();
    //     // $request = \Yii::$app->getRequest();
    //     // \Yii::$app->request->post();
    //     // // $request->setPathInfo('danmu/create');
    //     // $post=$_POST;
    //     // if($post){    
    //         // $model =new danmus;
    //         // $model->words = \Yii::$app->request->post('content');
    //         // $model->save();
    //     //     $request->setPathInfo('danmu/create');
    //     //     return $this->renderPartial('fun', ['danmus' => $danmus,'model'=>$model,  ]);  
    //     // // }
    //     // $model =new danmus;
    //     // if(\Yii::$app->request->post()){
    //     //     $model->words = \Yii::$app->request->post('content');
    //     //     $model->save();
    //     //     return $this->render('fun',['model'=>$model]);
    //     // }
    //     return $this->renderPartial('fun', [  
    //         'danmus' => $danmus,
    //     ]);  
    // }
    public function actionCreate(){
        $model =new danmus;
        $query = danmus::find();
        $danmus = $query->orderBy('id')
            ->all();
        if(\Yii::$app->request->post()){
            $request = \Yii::$app->request;
            $model->words = \Yii::$app->request->post('content');
            if($model->words!=NULL)$model->save(); 
            return $this->renderPartial('fun',['danmus' => $danmus,'model'=>$model]);   
        }
        return $this->renderPartial('fun',['danmus' => $danmus]);
    }
}
