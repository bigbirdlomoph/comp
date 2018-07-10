<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\FormComputer;
use yii\data\ArrayDataProvider;

class ReportController extends Controller
{
    public function actionSummary()
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT m.month_name as monthname, f.month_approve, 
        COUNT(DISTINCT f.hw_id)as hardware, 
        SUM(f.quantity)as QTY, 
        SUM((f.quantity)*(h.price))as value
        FROM form_computer f
        LEFT JOIN com_hardware h on f.hw_id = h.hw_id
        LEFT JOIN com_month_approve m on m.month_mm = f.month_approve
        WHERE f.month_approve IN('10','11','12','01','02','03','04','05')
        GROUP BY f.month_approve
        ";

        $monthname = Yii::$app->request->post('monthname');
        $values = Yii::$app->request->post('value');
        $qty = Yii::$app->request->post('qty');
        $month_approve = Yii::$app->request->post('month_approve');

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['monthname','value']
            ],
        ]);

        return $this->render('summary',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionSumhosmonth($month_approve)
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT
        f.hoscode,
        o.off_name,
        f.month_approve,
        m.month_name AS monthname,
        SUM(sum_price) AS sprice
        FROM
            form_computer f
        LEFT JOIN co_office o ON o.off_id = f.hoscode
        LEFT JOIN com_month_approve m ON m.month_mm = f.month_approve
        WHERE
            f.month_approve = '$month_approve'
        GROUP BY
        f.hoscode
        ";

        $monthname = Yii::$app->request->post('monthname');
        $sprice = Yii::$app->request->post('sprice');
        $qty = Yii::$app->request->post('qty');
        $month_approve = Yii::$app->request->post('month_approve');
        $hoscode = Yii::$app->request->post('hoscode');

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hoscode']
            ],
        ]);

        return $this->render('sumhosmonth',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionhospital($month_approve,$hoscode)
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT
        f.hoscode,
        f.project_name,
        f.month_approve,
        f.hw_id,
        h.hw_detail,
        f.quantity,
        f.price,
        f.sum_price,
        f.total_budget
        FROM
            form_computer f
        LEFT JOIN com_hardware h ON h.hw_id = f.hw_id
        WHERE
            f.month_approve = '$month_approve'
        AND f.hoscode = '$hoscode'
        ";

        $hoscode = Yii::$app->request->post('hoscode');
        $project_name = Yii::$app->request->post('project_name');
        $month_approve = Yii::$app->request->post('month_approve');
        $hw_id = Yii::$app->request->post('hw_id');
        $hw_detail = Yii::$app->request->post('hw_detail');
        $qty = Yii::$app->request->post('quantity');
        $price = Yii::$app->request->post('price');
        $sumprice = Yii::$app->request->post('sum_price');
        $total_budget = Yii::$app->request->post('total_budget');
        
        

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hoscode']
            ],
        ]);

        return $this->render('sumhosmonth',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionComdetail($month_approve,$hoscode)
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT
        f.hoscode,
        o.off_name,
        f.project_name,
        f.month_approve,
        m.month_name AS monthname,
        f.hw_id,
        h.hw_detail,
        h.price,
        f.quantity as qty,
        f.sum_price,
        f.total_budget
        FROM
            form_computer f
        LEFT JOIN co_office o ON o.off_id = f.hoscode
        LEFT JOIN com_month_approve m ON m.month_mm = f.month_approve
        LEFT JOIN com_hardware h on h.hw_id = f.hw_id
        WHERE
        f.month_approve = '$month_approve' and f.hoscode = '$hoscode'
        ";

        $hoscode = Yii::$app->request->post('hoscode');
        $off_name = Yii::$app->request->post('off_name');
        $project_name = Yii::$app->request->post('project_name');
        $month_approve = Yii::$app->request->post('month_approve');
        $monthname = Yii::$app->request->post('monthname');
        $hw_detail = Yii::$app->request->post('hw_detail');
        $qty = Yii::$app->request->post('qty');
        $price = Yii::$app->request->post('price');
        $sumprice = Yii::$app->request->post('sum_price');
        $total_budget = Yii::$app->request->post('total_budget');
        
        

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hw_id']
            ],
        ]);

        return $this->render('comdetail',[
            'dataProvider' => $dataProvider,
            //'off_name' => $off_name,
            'rawData' => $rawData,
            'sql' => $sql
        ]);
    }

    public function actionSummarynonspec()
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT f.hoscode, m.month_name as monthname, 
        f.month_approve,
        SUM(f.quantity)as QTY, 
        SUM(f.sum_price)as value
        FROM form_computer_nonspec f
        LEFT JOIN com_month_approve m on m.month_mm = f.month_approve
        WHERE f.month_approve IN('10','11','12','01','02','03','04','05')
        GROUP BY f.month_approve
        ";

        $monthname = Yii::$app->request->post('monthname');
        $values = Yii::$app->request->post('value');
        $qty = Yii::$app->request->post('qty');

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['month_approve','monthname','value']
            ],
        ]);

        return $this->render('summarynonspec',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionSumhos()
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT  f.hoscode, o.off_name, f.cupcode, SUM(f.sum_price)as sprice
        FROM form_computer f
        LEFT JOIN co_office o on o.off_id = f.hoscode
        LEFT JOIN com_month_approve m on m.month_mm = f.month_approve
        LEFT JOIN co_district d on d.distid = o.distid
        WHERE f.month_approve IN('10','11','12','01','02','03','04','05')
        GROUP BY f.hoscode
        ORDER BY sprice desc
        LIMIT 10
        ";

        $hoscode = Yii::$app->request->post('hoscode');
        $values = Yii::$app->request->post('sprice');
        $offname = Yii::$app->request->post('off_name');

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hoscode','off_name','sprice']
            ],
        ]);

        return $this->render('sumhos',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionSumdist()
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT  d.distid, d.distname, SUM(f.sum_price)as sprice
        FROM form_computer f
        LEFT JOIN co_office o on o.off_id = f.hoscode
        LEFT JOIN com_month_approve m on m.month_mm = f.month_approve
        LEFT JOIN co_district d on d.distid = o.distid
        WHERE f.month_approve IN('10','11','12','01','02','03','04','05')
        GROUP BY o.distid
        ";

        $distid = Yii::$app->request->post('distid');
        $distname = Yii::$app->request->post('distname');
        $values = Yii::$app->request->post('sprice');
        

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['distid','distname','sprice']
            ],
        ]);

        return $this->render('sumdist',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }

    public function actionSumqty()
    {
        //$connection = Yii::$app->db;
        $sql = "SELECT h.hw_id, h.hw_detail, SUM(f.quantity)as qty, SUM((f.quantity)*(h.price))as sprice
        FROM form_computer f
        LEFT JOIN com_hardware h on f.hw_id = h.hw_id
        GROUP BY h.hw_id
        ORDER BY QTY DESC
        LIMIT 10
        ";

        $hw_id = Yii::$app->request->post('hw_id');
        $hw_detail = Yii::$app->request->post('hw_detail');
        $qty = Yii::$app->request->post('qty');
        $sprice = Yii::$app->request->post('sprice');
        

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $rawData,
            'sort' => [
                'attributes'=>['hw_id','hw_detail','qty','sprice']
            ],
        ]);

        return $this->render('sumqty',[
            'dataProvider' => $dataProvider,
            //'monthname' => $monthname,
            //'value' => $value,
            'sql' => $sql
        ]);
    }
}