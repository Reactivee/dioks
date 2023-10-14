<?php

namespace backend\controllers;

use common\models\Country;
use common\models\CountrySearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Country models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CountrySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Country model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Country model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Country();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $file_image = UploadedFile::getInstances($model, 'img');
                if ($file_image) {
                    foreach ($file_image as $file) {

                        $folder = '/web/uploads/country/';
                        $uploads_folder = Yii::getAlias('@frontend') . $folder;
                        if (!file_exists($uploads_folder)) {
                            mkdir($uploads_folder, 0777, true);
                        }
                        $ext = pathinfo($file->name, PATHINFO_EXTENSION);
                        $generateName = Yii::$app->security->generateRandomString();
                        $path = $uploads_folder . $generateName . ".{$ext}";
                        $file->saveAs($path);

                        $model->img = '/uploads/country/' . $generateName . ".{$ext}";

                    }
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Country model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {

            $file_image = UploadedFile::getInstances($model, 'img');

            if ($file_image) {
                foreach ($file_image as $file) {

                    $folder = '/web/uploads/country/';
                    $uploads_folder = Yii::getAlias('@frontend') . $folder;
                    if (!file_exists($uploads_folder)) {
                        mkdir($uploads_folder, 0777, true);
                    }
                    $ext = pathinfo($file->name, PATHINFO_EXTENSION);
                    $generateName = Yii::$app->security->generateRandomString();
                    $path = $uploads_folder . $generateName . ".{$ext}";
                    $file->saveAs($path);
                    $model->img = '/uploads/country/' . $generateName . ".{$ext}";
                }
            } else {
                $model->img = $model['oldAttributes']['img'];
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Country model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Country model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Country the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Country::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
