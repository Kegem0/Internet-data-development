<?php

namespace backend\controllers;

use Yii;
use backend\models\AssociateWithactivity;
use backend\models\AssociateWithactivitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssociateWithactivityController implements the CRUD actions for AssociateWithactivity model.
 */
class AssociateWithactivityController extends Controller
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
     * Lists all AssociateWithactivity models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssociateWithactivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AssociateWithactivity model.
     * @param string $activity_date
     * @param integer $activity_num
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($activity_date, $activity_num, $news_date, $news_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($activity_date, $activity_num, $news_date, $news_num),
        ]);
    }

    /**
     * Creates a new AssociateWithactivity model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AssociateWithactivity();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AssociateWithactivity model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $activity_date
     * @param integer $activity_num
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($activity_date, $activity_num, $news_date, $news_num)
    {
        $model = $this->findModel($activity_date, $activity_num, $news_date, $news_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AssociateWithactivity model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $activity_date
     * @param integer $activity_num
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($activity_date, $activity_num, $news_date, $news_num)
    {
        $this->findModel($activity_date, $activity_num, $news_date, $news_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AssociateWithactivity model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $activity_date
     * @param integer $activity_num
     * @param string $news_date
     * @param integer $news_num
     * @return AssociateWithactivity the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($activity_date, $activity_num, $news_date, $news_num)
    {
        if (($model = AssociateWithactivity::findOne(['activity_date' => $activity_date, 'activity_num' => $activity_num, 'news_date' => $news_date, 'news_num' => $news_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
