<?php

namespace backend\controllers;

use Yii;
use backend\models\JoinGuest;
use backend\models\JoinGuestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JoinGuestController implements the CRUD actions for JoinGuest model.
 */
class JoinGuestController extends Controller
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
     * Lists all JoinGuest models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JoinGuestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JoinGuest model.
     * @param integer $guest_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($guest_id, $activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($guest_id, $activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new JoinGuest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JoinGuest();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'guest_id' => $model->guest_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JoinGuest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $guest_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($guest_id, $activity_date, $activity_num)
    {
        $model = $this->findModel($guest_id, $activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'guest_id' => $model->guest_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JoinGuest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $guest_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($guest_id, $activity_date, $activity_num)
    {
        $this->findModel($guest_id, $activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JoinGuest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $guest_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return JoinGuest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($guest_id, $activity_date, $activity_num)
    {
        if (($model = JoinGuest::findOne(['guest_id' => $guest_id, 'activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
