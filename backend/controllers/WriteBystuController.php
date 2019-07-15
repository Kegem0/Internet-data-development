<?php

namespace backend\controllers;

use Yii;
use backend\models\WriteBystu;
use backend\models\WriteBystuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WriteBystuController implements the CRUD actions for WriteBystu model.
 */
class WriteBystuController extends Controller
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
     * Lists all WriteBystu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WriteBystuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WriteBystu model.
     * @param integer $student_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_id, $news_date, $news_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($student_id, $news_date, $news_num),
        ]);
    }

    /**
     * Creates a new WriteBystu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WriteBystu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WriteBystu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $student_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_id, $news_date, $news_num)
    {
        $model = $this->findModel($student_id, $news_date, $news_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WriteBystu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $student_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($student_id, $news_date, $news_num)
    {
        $this->findModel($student_id, $news_date, $news_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WriteBystu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $student_id
     * @param string $news_date
     * @param integer $news_num
     * @return WriteBystu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_id, $news_date, $news_num)
    {
        if (($model = WriteBystu::findOne(['student_id' => $student_id, 'news_date' => $news_date, 'news_num' => $news_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
