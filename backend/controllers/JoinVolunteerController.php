<?php

namespace backend\controllers;

use Yii;
use backend\models\JoinVolunteer;
use backend\models\JoinVolunteerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JoinVolunteerController implements the CRUD actions for JoinVolunteer model.
 */
class JoinVolunteerController extends Controller
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
     * Lists all JoinVolunteer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JoinVolunteerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JoinVolunteer model.
     * @param integer $volunteer_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($volunteer_id, $activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($volunteer_id, $activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new JoinVolunteer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JoinVolunteer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'volunteer_id' => $model->volunteer_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JoinVolunteer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $volunteer_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($volunteer_id, $activity_date, $activity_num)
    {
        $model = $this->findModel($volunteer_id, $activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'volunteer_id' => $model->volunteer_id, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JoinVolunteer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $volunteer_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($volunteer_id, $activity_date, $activity_num)
    {
        $this->findModel($volunteer_id, $activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JoinVolunteer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $volunteer_id
     * @param string $activity_date
     * @param integer $activity_num
     * @return JoinVolunteer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($volunteer_id, $activity_date, $activity_num)
    {
        if (($model = JoinVolunteer::findOne(['volunteer_id' => $volunteer_id, 'activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
