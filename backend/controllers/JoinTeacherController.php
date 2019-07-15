<?php

namespace backend\controllers;

use Yii;
use backend\models\JoinTeacher;
use backend\models\JoinTeacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JoinTeacherController implements the CRUD actions for JoinTeacher model.
 */
class JoinTeacherController extends Controller
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
     * Lists all JoinTeacher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JoinTeacherSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JoinTeacher model.
     * @param integer $teacher_workid
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($teacher_workid, $activity_date, $activity_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($teacher_workid, $activity_date, $activity_num),
        ]);
    }

    /**
     * Creates a new JoinTeacher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JoinTeacher();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_workid' => $model->teacher_workid, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JoinTeacher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $teacher_workid
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($teacher_workid, $activity_date, $activity_num)
    {
        $model = $this->findModel($teacher_workid, $activity_date, $activity_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_workid' => $model->teacher_workid, 'activity_date' => $model->activity_date, 'activity_num' => $model->activity_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JoinTeacher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $teacher_workid
     * @param string $activity_date
     * @param integer $activity_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($teacher_workid, $activity_date, $activity_num)
    {
        $this->findModel($teacher_workid, $activity_date, $activity_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JoinTeacher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $teacher_workid
     * @param string $activity_date
     * @param integer $activity_num
     * @return JoinTeacher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($teacher_workid, $activity_date, $activity_num)
    {
        if (($model = JoinTeacher::findOne(['teacher_workid' => $teacher_workid, 'activity_date' => $activity_date, 'activity_num' => $activity_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
