<?php

class TratamientoRealizadoController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'tratamientoPaciente', 'TratamientoCara', 'CargaDiente'),
                'users' => array('Dentista', 'Asistente'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($idFicha) {
        $model = new TratamientoRealizado;
        $model->id_ficha = $idFicha;
        date_default_timezone_set('UTC');
        $fecha = date("Y-m-d");
        $model->fecha = $fecha;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TratamientoRealizado'])) {
            $model->attributes = $_POST['TratamientoRealizado'];
            if ($model->save()) {
                //$this->redirect(array('view', 'id' => $model->id_realizado));
                $this->redirect(array('TratamientoCara','id' => $model->id_realizado));
                //$this->render('TratamientoCara', array('model_tratamiento' => $model));
            }
        } else {
            $this->render('create', array(
                'model' => $model,
            ));
        }
    }

    public function actionCargaDiente($pieza, $model_tratamiento) {
        $this->render('/tieneTratamiento/agregaTratamientoCara', array(
            'model' => $model_tratamiento,
            'numero' => $pieza,
        ));
    }

    public function actionTratamientoCara($id) {
        $model = $this->loadModel($id);
        $this->render('TratamientoCara', array('model' => $model));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TratamientoRealizado'])) {
            $model->attributes = $_POST['TratamientoRealizado'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_realizado));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TratamientoRealizado');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TratamientoRealizado('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TratamientoRealizado']))
            $model->attributes = $_GET['TratamientoRealizado'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TratamientoRealizado the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TratamientoRealizado::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TratamientoRealizado $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tratamiento-realizado-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}

