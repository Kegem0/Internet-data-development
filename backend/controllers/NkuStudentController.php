<?php

namespace backend\controllers;

use Yii;
use yii\bootstrap\Alert;
use backend\models\NkuStudent;
use backend\models\NkuStudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\NkuAdmin;

/**
 * NkuStudentController implements the CRUD actions for NkuStudent model.
 */
class NkuStudentController extends Controller
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
     * Lists all NkuStudent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NkuStudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NkuStudent model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NkuStudent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NkuStudent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NkuStudent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NkuStudent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NkuStudent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NkuStudent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NkuStudent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionNonadmin()
    {
        $searchModel = new NkuStudentSearch();
        $dataProvider = $searchModel->search_nonadmin(Yii::$app->request->queryParams);

        return $this->render('nonadmin', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionAudit($id)
    {
        $ad=NkuAdmin::find()->where(['admin_id'=>$id])->exists();
        if($ad==0) {
            $audit = $this->findModel($id);
            $admin = new NkuAdmin();
            $admin->admin_id = $audit->student_id;
            $admin->admin_num = 0;
            $admin->save();
            return $this->redirect(['index']);
        }
        else {
//           return $this->redirect(['nonadmin']);

            echo Alert::widget([
                'options' => [
                    'class' => 'alert-info',
                ],
                'body' => '已经存在！',
            ]);
            return $this->redirect(['nonadmin']);

        }
    }

}


