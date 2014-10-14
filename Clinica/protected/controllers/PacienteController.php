<?php

class PacienteController extends Controller {

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
                'actions' => array('create', 'update', 'delete'),
                'users' => array('Dentista','Asistente'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin'),
                'users' => array('@'),
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
    public function actionCreate() {
        $model = new Paciente;
        // Ficha
        $ficha = new FichaDental;
        // Anamnesis
        $anamnesis = new Anamnesis;
        //Odontograma
        $odontograma = new Odontograma;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Paciente'])) {
            //Datos a guardar en la Ficha
            $rut = $_POST['Paciente']['rut_paciente'];
            $model->attributes = $_POST['Paciente'];
            if ($model->save()){
                //Se guarda el rut en la tabla FichaDental
                $ficha->rut_paciente = $rut;
                date_default_timezone_set('UTC');
                $ficha->fecha_creacion = date("Y-m-d"); 
                $ficha->save();
                //Se terminan de guardar los datos en la FichaDental
                
                //Se guardan los datos de anamesis en blanco
                $anamnesis->id_ficha = $ficha->id_ficha;
                $anamnesis->alergias = "No se registran datos";
                $anamnesis->enfermedades = "No se registran datos";
                $anamnesis->enfermedades_familia = "No se registran datos";
                $anamnesis->medicamentos = "No se registran datos";
                $anamnesis->otros = "No se registran datos";
                $anamnesis->save();
                
                $odontograma->id_ficha = $ficha->id_ficha;
                $odontograma->comentario = "No existen comentarios";
                $odontograma->save();
                
                $nombres = array(18,17,16,15,14,13,12,11,21,22,23,24,25,26,27,28,52,51,50,49,48,61,62,63,64,65,82,81,80,79,78,71,72,73,74,75,48,47,46,45,44,43,42,41,31,32,33,34,35,36,37,38);
                
                for($i = 0 ; $i < 52 ; $i++){
                    
                    $pieza = new Pieza();
                    $pieza->id_odontograma = $odontograma->id_odontograma;
                    $pieza->nombre_pieza = $nombres[$i];
                    $pieza->imagen = "nones";
                    $pieza->save();
                    
                    $cara = new Cara();
                    $cara->nombre = "Cara Superior";
                    $cara->id_pieza = $pieza->id_pieza;
                    $cara->save();
                    
                    $cara2 = new Cara();
                    $cara2->nombre = "Cara Inferior";
                    $cara2->id_pieza = $pieza->id_pieza;
                    $cara2->save();
                    
                    $cara3 = new Cara();
                    $cara3->nombre = "Cara Derecha";
                    $cara3->id_pieza = $pieza->id_pieza;
                    $cara3->save();
                    
                    $cara4 = new Cara();
                    $cara4->nombre = "Cara Izquierda";
                    $cara4->id_pieza = $pieza->id_pieza;
                    $cara4->save();
                    
                    $cara5 = new Cara();
                    $cara5->nombre = "Cara Central";
                    $cara5->id_pieza = $pieza->id_pieza;
                    $cara5->save();
                }
                
                $this->redirect(array('view', 'id' => $model->rut_paciente));
            }    
        }

        $this->render('create', array(
            'model' => $model,
        ));
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

        if (isset($_POST['Paciente'])) {
            $model->attributes = $_POST['Paciente'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->rut_paciente));
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
        $dataProvider = new CActiveDataProvider('Paciente');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Paciente('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Paciente']))
            $model->attributes = $_GET['Paciente'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Paciente the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Paciente::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Paciente $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'paciente-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    public function actionMuestraFicha(){
        $this->render('fichaPaciente');
    }
    
    public function actionFicha($rut) {
        $this->render('view', array('localId' => $rut));
    }

}
