<?php

namespace app\controllers;

use Yii;
use app\models\ComHardware62;
use app\models\ComHardware62Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;

/**
 * ComHardware62Controller implements the CRUD actions for ComHardware62 model.
 */
class ComHardware62Controller extends Controller
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
     * Lists all ComHardware62 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComHardware62Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ComHardware62 model.
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
     * Creates a new ComHardware62 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ComHardware62();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'hw_id' => $model->hw_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ComHardware62 model.
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
     * Deletes an existing ComHardware62 model.
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
     * Finds the ComHardware62 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $hw_id
     * @return ComHardware62 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $hw_id)
    {
        if (($model = ComHardware62::findOne(['id' => $id, 'hw_id' => $hw_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionHwdetail62($hw_id)
    {
        $sql = "SELECT h.hw_id, h.hw_detail, h.price, d.hw_detail_name
                FROM com_hardware_62 h
                LEFT JOIN com_hardware_detail_62 d on d.hw_detail_id = h.hw_id
                WHERE h.hw_id=$hw_id
                ";

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hw_id','hw_detail','price','hw_detail_name']
            ],
        ]);

        return $this->render('hwdetail62',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
            //'hw_detail' => $hw_detail,
        ]);
    }
}
