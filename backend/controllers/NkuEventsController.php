<?php

namespace backend\controllers;

use Yii;
use backend\models\NkuEvents;
use backend\models\NkuEventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NkuEventsController implements the CRUD actions for NkuEvents model.
 */
class NkuEventsController extends Controller
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
     * Lists all NkuEvents models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NkuEventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NkuEvents model.
     * @param string $events_time
     * @param string $events_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($events_time, $events_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($events_time, $events_name),
        ]);
    }

    /**
     * Creates a new NkuEvents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NkuEvents();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'events_time' => $model->events_time, 'events_name' => $model->events_name]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NkuEvents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $events_time
     * @param string $events_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($events_time, $events_name)
    {
        $model = $this->findModel($events_time, $events_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'events_time' => $model->events_time, 'events_name' => $model->events_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NkuEvents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $events_time
     * @param string $events_name
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($events_time, $events_name)
    {
        $this->findModel($events_time, $events_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NkuEvents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $events_time
     * @param string $events_name
     * @return NkuEvents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($events_time, $events_name)
    {
        if (($model = NkuEvents::findOne(['events_time' => $events_time, 'events_name' => $events_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
