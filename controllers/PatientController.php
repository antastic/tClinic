<?php

namespace app\controllers;

use Yii;
use app\models\Patient;
use app\models\patientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;
use yii\web\Response;

/**
 * PatientController implements the CRUD actions for Patient model.
 */
class PatientController extends Controller {

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
     * Lists all Patient models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new patientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patient model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Patient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Patient();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $searchModel = new patientSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
            ]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Patient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pt_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function actionValidate() {
        $model = new Patient();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }

    /**
     * Deletes an existing Patient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionReport1() {
        $sql = "SELECT CONCAT(emp_name,' ',emp_lname) AS fullname,emp_type FROM employee";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report1', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    public function actionReport2() {
        $mn = getdate();
        $m = $mn['mon'];
        $sql = "SELECT v.datetimesv,CONCAT(pt.ptName,' ',pt.ptLname) AS fullname,s.svdx,a.apps_date FROM visit v "
                . "LEFT JOIN patient pt on pt.pt_id=v.pt_id "
                . "LEFT JOIN service s ON s.visit_id=v.id "
                . "LEFT JOIN appointment a ON a.service_id=s.sv_id "
                . "WHERE MONTH(v.datetimesv)='$m'";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report2', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    public function actionReport3() {
        $mn = getdate();
        $m = $mn['mon'];
        $sql = "SELECT p.ic_date,p.ic_id,p.ic_summary,CONCAT(pt.ptName,' ',pt.ptLname) AS fullname FROM payment p "
                . "LEFT JOIN service s ON s.visit_id=p.service_id "
                . "LEFT JOIN visit v ON v.id =s.visit_id "
                . "LEFT JOIN patient pt on pt.pt_id=v.pt_id "
                . "WHERE MONTH(p.ic_date)='$m' "
                . "GROUP BY p.ic_id";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report3', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    public function actionReport4() {
        //$mn = getdate();
        //$m = $mn['mon'];
        $sql = "SELECT d.drugname ,sum(di.in_amount)- sum(dp.drug_amount) as sumdrug FROM drugitem di "
                . "LEFT JOIN drug d ON d.drug_id=di.drug_id "
                . "LEFT JOIN dispense dp ON dp.drug_id = d.drug_id WHERE di.ip_status='ใช้ได้' "
                . "GROUP BY di.drug_id "
                . "ORDER BY sumdrug";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report4', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    public function actionReport5() {
       
        $dt = date('Y-m-d');
        $sql = "SELECT d.drugname ,di.ip_exp FROM drugitem di "
                . "LEFT JOIN drug d ON d.drug_id=di.drug_id "
                . "LEFT JOIN dispense dp ON dp.drug_id = d.drug_id WHERE di.ip_exp<'$dt' "
                . "GROUP BY di.drug_id";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report5', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    
    public function actionReportptday() {
       
        $dt = date('Y-m-d');
        $sql = "SELECT CONCAT(pt.ptLname,' ',pt.ptLname) as fullname  FROM visit v
LEFT JOIN patient pt ON pt.pt_id =v.pt_id
WHERE v.datetimesv >=$dt";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('reportptday', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

     public function actionReportmday() {
       
        $dt = date('Y-m-d');
        $sql = "SELECT DATE(v.datetimesv) AS dt, CONCAT(pt.ptName,' ',pt.ptLname) as fullname, ic_summary, s.svdx from payment p
LEFT JOIN service s ON s.sv_id = p.service_id
LEFT JOIN visit v ON s.visit_id=v.id
LEFT JOIN patient pt ON pt.pt_id = v.pt_id
WHERE v.datetimesv > $dt";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('reportmday', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }

    
    /**
     * Finds the Patient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Patient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Patient::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
