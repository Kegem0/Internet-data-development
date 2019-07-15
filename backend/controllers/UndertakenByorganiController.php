<?php

namespace backend\controllers;

use Yii;
use backend\models\UndertakenByorgani;
use backend\models\UndertakenByorganiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UndertakenByorganiController implements the CRUD actions for UndertakenByorgani model.
 */
class UndertakenByorganiController extends Controller
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
     * Lists all UndertakenByorgani models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UndertakenByorganiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UndertakenByorgani model.
     * @param string $organi_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($organi_name, $activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($organi_name, $activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new UndertakenByorgani model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UndertakenByorgani();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'organi_name' => $model->organi_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UndertakenByorgani model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $organi_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($organi_name, $activity_date, $activity_num)
    {
        $model = $this->findModel($organi_name, $activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'organi_name' => $model->organi_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UndertakenByorgani model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $organi_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($organi_name, $activity_date, $activity_num)
    {
        $this->findModel($organi_name, $activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UndertakenByorgani model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $organi_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return UndertakenByorgani the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($organi_name, $activity_date, $activity_num)
    {
        if (($model = UndertakenByorgani::findOne(['organi_name' => $organi_name, 'activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
