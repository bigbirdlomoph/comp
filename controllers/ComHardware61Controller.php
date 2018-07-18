<?php

namespace app\controllers;

use Yii;
use app\models\ComHardware61;
use app\models\ComHardware61Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComHardware61Controller implements the CRUD actions for ComHardware61 model.
 */
class ComHardware61Controller extends Controller
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
     * Lists all ComHardware61 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComHardware61Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ComHardware61 model.
     * @param integer $id
     * @param string $hw_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $hw_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $hw_id),
        ]);
    }

    /**
     * Creates a new ComHardware61 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ComHardware61();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'hw_id' => $model->hw_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ComHardware61 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $hw_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $hw_id)
    {
        $model = $this->findModel($id, $hw_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'hw_id' => $model->hw_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ComHardware61 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $hw_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $hw_id)
    {
        $this->findModel($id, $hw_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ComHardware61 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $hw_id
     * @return ComHardware61 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $hw_id)
    {
        if (($model = ComHardware61::findOne(['id' => $id, 'hw_id' => $hw_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
