<?php

namespace backend\modules\news\controllers;

use Yii;
use common\models\News;
use backend\modules\news\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new News();

        if ($model->load(Yii::$app->request->post())) {
            try {
                //$model->image = UploadedFile::getInstance($model, 'image');
                $model->file_pdf = UploadedFile::getInstances($model, 'file_pdf'); //upload หลายไฟล์ getInstances (เติม s)
                //$model->image = $model->uploadImage(); //method return ชื่อไฟล์
                $model->file_pdf = $model->uploadFiles(); //method return ชื่อไฟล์ aaaa.aaa, bbbb.bbb, ...
                $model->created_at = date('Y-m-d h:i:s');
                $model->created_by = Yii::$app->user->identity->id;
                //$model->updated_by = Yii::$app->user->identity->id;

                $model->save(); //บันทึกข้อมูล
                /* var_dump($model);
                  die(); */
                Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
                return $this->redirect(['index']);
            } catch (Exception $e) {
                Yii::$app->session->setFlash('danger', 'มีข้อผิดพลาด');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        
        if($model->load(Yii::$app->request->post())){

            try{
                //$model->image = UploadedFile::getInstance($model, 'image');
                $model->files = UploadedFile::getInstances($model, 'file_pdf');//upload หลายไฟล์ getInstances (เติม s)
                //$model->image = $model->uploadImage();//method return ชื่อไฟล์
                $model->files = $model->uploadFiles();//method return ชื่อไฟล์ aaaa.aaa, bbbb.bbb, 

                $model->updated_at = date('Y-m-d h:i:s');
                $model->updated_by = Yii::$app->user->identity->id;
                
                $model->save();//บันทึกข้อมูล

                Yii::$app->session->setFlash('success', 'บันทึกข้อมูลเรียบร้อย');
                return $this->redirect(['index']);
            }catch(Exception $e){
                Yii::$app->session->setFlash('danger', 'มีข้อผิดพลาด');
                return $this->redirect(['index']);
            }
        }
        return $this->render('update', [
            'model' => $model
        ]);

    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
