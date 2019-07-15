<?php

namespace backend\controllers;

use Yii;
use backend\models\AuditByadmin;
use backend\models\AuditByadminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AuditByadminController implements the CRUD actions for AuditByadmin model.
 */
class AuditByadminController extends Controller
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
     * Lists all AuditByadmin models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuditByadminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuditByadmin model.
     * @param integer $admin_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($admin_id, $news_date, $news_num)
    {
        return $this->render('view', [
            'model' => $this->findModel($admin_id, $news_date, $news_num),
        ]);
    }

    /**
     * Creates a new AuditByadmin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuditByadmin();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'admin_id' => $model->admin_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuditByadmin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $admin_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($admin_id, $news_date, $news_num)
    {
        $model = $this->findModel($admin_id, $news_date, $news_num);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'admin_id' => $model->admin_id, 'news_date' => $model->news_date, 'news_num' => $model->news_num]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuditByadmin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $admin_id
     * @param string $news_date
     * @param integer $news_num
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($admin_id, $news_date, $news_num)
    {
        $this->findModel($admin_id, $news_date, $news_num)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuditByadmin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $admin_id
     * @param string $news_date
     * @param integer $news_num
     * @return AuditByadmin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($admin_id, $news_date, $news_num)
    {
        if (($model = AuditByadmin::findOne(['admin_id' => $admin_id, 'news_date' => $news_date, 'news_num' => $news_num])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
