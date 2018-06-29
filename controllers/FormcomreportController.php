<?php

namespace app\controllers;

use Yii;
use app\models\FormComReport;
use app\models\FormcomreportSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\helpers\Url;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;

/**
 * FormcomreportController implements the CRUD actions for FormComReport model.
 */
class FormcomreportController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all FormComReport models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormcomreportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormComReport model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FormComReport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FormComReport();

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FormComReport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FormComReport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormComReport model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormComReport the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormComReport::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionFrmword()
    {
        $data = '';
        foreach(FormComReport::find()->limit(10)->all() as $item){
            $data .= $item->detail.' ';
        }
        Settings::setTempDir(Yii::getAlias('@webroot').'/temp/'); //กำหนด folder temp สำหรับ windows server ที่ permission denied temp (อย่ายลืมสร้างใน project ล่ะ)
        $templateProcessor = new TemplateProcessor(Yii::getAlias('@webroot').'/msword/reportcom.docx');//เลือกไฟล์ template ที่เราสร้างไว้
        
            $datas = [
                ['id', 'hw_detail', 'report', 'recognize', 'allocate', 'qty', 'unit', 'summary', 'company'],
            ];
            $templateProcessor->cloneRow('item', sizeof($datas));
            $i = 1;
            foreach ($datas as $item => $val) { //item is key
                $templateProcessor->setValue('id#'.$i, $i);
                $templateProcessor->setValue('hw_detail#'.$i, $val['hw_detail']);
                $templateProcessor->setValue('report#'.$i, $val['report']);
                $templateProcessor->setValue('recognize#'.$i, $val['recognize']);
                $templateProcessor->setValue('allocate#'.$i, $val['allocate']);
                $templateProcessor->setValue('qty#'.$i, $val['qty']);
                $templateProcessor->setValue('unit#'.$i, $val['unit']);
                $templateProcessor->setValue('summary#'.$i, ($val['allocate'] > 0 ? number_format($val['allocate'] * $val['qty'], 2) : ''));
                $templateProcessor->setValue('company#'.$i, $val['company']);
                $i++;
    
            }

            $templateProcessor->saveAs(Yii::getAlias('@webroot').'/msword/reportcomputer.docx');//สั่งให้บันทึกข้อมูลลงไฟล์ใหม่

            echo '<p>';
            echo Html::a('ดาวน์โหลดเอกสาร', Url::to(Yii::getAlias('@web').'/msword/reportcomputer.docx'), ['class' => 'btn btn-success']);//สร้าง link download
            echo '</p>';
            //ลองให้ google doc viewer แสดงข้อมูลไฟล์ให้เห็นผ่าน iframe (อาจเพี้ยนๆ บ้าง)
            echo '<iframe src="http://docs.google.com/viewer?url='.Url::to(Yii::getAlias('@web').'/msword/reportcomputer.docx', true).'&embedded=true"  style="position: absolute;width:100%; height: 100%;border: none;"></iframe>';
    
    }

}