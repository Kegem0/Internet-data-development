<?php

namespace backend\controllers;

use Yii;
use backend\models\UndertakenBycollege;
use backend\models\UndertakenBycollegeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UndertakenBycollegeController implements the CRUD actions for UndertakenBycollege model.
 */
class UndertakenBycollegeController extends Controller
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
     * Lists all UndertakenBycollege models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UndertakenBycollegeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UndertakenBycollege model.
     * @param string $college_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($college_name, $activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($college_name, $activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new UndertakenBycollege model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UndertakenBycollege();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'college_name' => $model->college_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UndertakenBycollege model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $college_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($college_name, $activity_date, $activity_num)
    {
        $model = $this->findModel($college_name, $activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'college_name' => $model->college_name, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UndertakenBycollege model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $college_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($college_name, $activity_date, $activity_num)
    {
        $this->findModel($college_name, $activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UndertakenBycollege model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $college_name
     * @param string $activity_date
     * @param integer $activity_num
     * @return UndertakenBycollege the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($college_name, $activity_date, $activity_num)
    {
        if (($model = UndertakenBycollege::findOne(['college_name' => $college_name, 'activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
