<?php

namespace backend\controllers;

use Yii;
use backend\models\NkuActivity;
use backend\models\NkuActivitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NkuActivityController implements the CRUD actions for NkuActivity model.
 */
class NkuActivityController extends Controller
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
     * Lists all NkuActivity models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NkuActivitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NkuActivity model.
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new NkuActivity model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NkuActivity();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NkuActivity model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($activity_date, $activity_num)
    {
        $model = $this->findModel($activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NkuActivity model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($activity_date, $activity_num)
    {
        $this->findModel($activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NkuActivity model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $activity_date
     * @param integer $activity_num
     * @return NkuActivity the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($activity_date, $activity_num)
    {
        if (($model = NkuActivity::findOne(['activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
