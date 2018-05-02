<?php

namespace app\controllers;

use Yii;
use app\models\Dispense;
use app\models\DispenseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DispenseController implements the CRUD actions for Dispense model.
 */
class DispenseController extends Controller
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
     * Lists all Dispense models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DispenseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dispense model.
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
     * Creates a new Dispense model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dispense();

        if ($model->load(Yii::$app->request->post())) {
            $model->service_id=$id;
            if($model->save()){
              return $this->redirect(['view', 'id' => $model->vsd_id]);  
            }
            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionCreateid($id)
    {
        $model = new Dispense();

        if ($model->load(Yii::$app->request->post())) {
            $model->service_id=$id;
            if($model->save()){
              return $this->redirect(['view', 'id' => $model->vsd_id]);  
            }
            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dispense model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->vsd_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dispense model.
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

    
    public function actionReport() {
        //$mn = getdate();
        //$m = $mn['mon'];
        $sql = "SELECT dp.drug_amount,dp.drug_prices,d.drugname,ex.Expenses, CONCAT(pt.ptName,' ',pt.ptLname) as fullname FROM dispense dp
LEFT JOIN drug d on d.drug_id = dp.drug_id
LEFT JOIN expenses ex on ex.ex_id= dp.Expenses_id
LEFT JOIN service sv ON sv.sv_id = dp.service_id
LEFT JOIN visit v on v.id = sv.visit_id
LEFT JOIN patient pt on pt.pt_id = v.pt_id
ORDER BY dp.service_id";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('report', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
    }
    
    public function actionExpense($id) {
        //$mn = getdate();
        //$m = $mn['mon'];
       $sql = "SELECT du.drugname, d.drug_amount,d.drug_prices FROM dispense d LEFT JOIN drug du ON du.drug_id = d.drug_id WHERE service_id =$id";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE
        ]);
        return $this->render('recipt', [
                    'dataProvider' => $dataProvider,
                    'sql' => $sql,
                    'rawData' => $rawData
        ]);
        //return $this->redirect('index.php?r=expenses');
    }
    
    /**
     * Finds the Dispense model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dispense the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dispense::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
