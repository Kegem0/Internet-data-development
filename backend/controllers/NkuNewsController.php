<?php
/**author 1711447**/
namespace backend\controllers;

use Yii;
use backend\models\NkuNews;
use backend\models\NkuNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NkuNewsController implements the CRUD actions for NkuNews model.
 */
class NkuNewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

  

    /**
     * Lists all NkuNews models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NkuNewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NkuNews model.
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($news_date, $news_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($news_date, $news_num),
        ]);
    }

    /**
     * Creates a new NkuNews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NkuNews();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }
        
    //     if(Yii::$app->user->can('新闻管理'))
    //     {
    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    //     }
    //     else
    // {

    //     return $this->render('first_create', [
    //         'model' => $model,
    //     ]);
    // }
    return $this->render('create', [
        'model' => $model,
    ]);

    }

    /**
     * Updates an existing NkuNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($news_date, $news_num)
    {
        $model = $this->findModel($news_date, $news_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }
    return $this->render('update', [
        'model' => $model,
    ]);
}
    /**
     * Deletes an existing NkuNews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($news_date, $news_num)
    {
        $this->findModel($news_date, $news_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NkuNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $news_date
     * @param integer $news_num
     * @return NkuNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($news_date, $news_num)
    {
        if (($model = NkuNews::findOne(['news_date' => $news_date, 'news_num' => $news_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
     public function actionFailed()
    {
        $searchModel = new NkuNewsSearch();
        $dataProvider = $searchModel->search_fail(Yii::$app->request->queryParams);

        return $this->render('failed', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionAudit($news_date, $news_num)
        {
            $audit=$this->findModel($news_date, $news_num);
            $audit->news_ifpassed=1;
            $audit->save();
            return $this->redirect(['index']);
        }
}
