<?php

class RequestController extends Controller {

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
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
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
        $model = new Request;
        $model2 = new StatusRequest;
        $model3 = new History;

        //get data 
        $user = User::model()->findByAttributes(array('id_user' => Yii::app()->user->id));
        $author = AuthorBranchOffice::model()->findByAttributes(array('id_user' => $user->id_user));
        $office = Office::model()->findByAttributes(array('id_office' => $author->id_office));
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $model->order_number = $model->id_request;
        if (isset($_POST['Request'])) {

            $model->attributes = $_POST['Request'];
            //temporary for Request
            $model->id_author = $author->id_author;
            $model->order_number = $model->id_request;

            if ($model->save()) {
                $modelSpare = SparepartList::model()->findByAttributes(array('id_sparelist' => $model->id_sparelist));
                $modelStock = Stock::model()->findByAttributes(array('id_spare' => $modelSpare->id_spare));
                $modelSpareOffice = SpareOffice::model()->findByAttributes(array('id_sparelist' => $model->id_sparelist));

                $model2->id_request = $model->id_request;
                $model2->status_request = 0;
                $model2->save();

                $model3->id_user = $user->id_user;
                $model3->id_request = $model->id_request;
                $model3->description = "create request a sparepart by $author->author_name from $office->branch_office";
                $model3->start_date_his = $model->start_date;
                $model3->end_date_his = $model->end_date;
                $model3->save();


                $modelSpare->id_status = 1;
                $modelSpare->save();

                $modelSpareOffice->id_office = $model->id_destiny;
                $modelSpareOffice->save();

                $remain = $modelStock->remain - 1;
                $ontheway = $modelStock->used + 1;
                $modelStock->remain = (int) $remain;
                $modelStock->used = (int) $ontheway;
                $modelStock->save();

                $this->redirect(array('view', 'id' => $model->id_request));
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

        if (isset($_POST['Request'])) {
            $model->attributes = $_POST['Request'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_request));
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
        $dataProvider = new CActiveDataProvider('Request');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Request('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Request']))
            $model->attributes = $_GET['Request'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Request the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Request::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Request $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'request-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionFindspare() {
        $data = SparepartList::model()->findAll('id_sparelist=:SN', array(':SN' => $_POST['aliasname']));
        $data = CHtml::listData($data, 'id_sparelist', 'SN');

        echo "<option value=''>SN</option>";
        foreach ($data as $value => $name)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
    }

}
