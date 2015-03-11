<?php


/*Yii::app()->getPanel('adminPanel')
		->pushOnBar(QtzPanel::BAR_DB) // add DB stats
		->pushOnBar(QtzPanel::BAR_LOGS) // add logs
		->pushOnBar(QtzPanel::BAR_MEMORY) // add memory stats
		->pushOnBar(QtzPanel::BAR_EXECUTION_TIME) // add time info
		->pushOnBar('custom info'); // add custom info
*/
class AccidenteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','principal','nuevoaccidente'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->getState("idRol")==1'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model3= new TrabajadorAccidente;
		$model4= new Testigo;
		$this->render('view',array(
			'model'=>$this->loadModel($id),'model3'=>$model3,'model4'=>$model4,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Accidente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Accidente']))
		{
			$model->attributes=$_POST['Accidente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAccidente));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionNuevoAccidente()
	{
		$model=new Accidente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Accidente']))
		{
			$model->attributes=$_POST['Accidente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAccidente));
		}

		$this->render('nuevoaccidente',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Accidente']))
		{
			$model->attributes=$_POST['Accidente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAccidente));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Accidente');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Accidente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Accidente']))
			$model->attributes=$_GET['Accidente'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionPrincipal()
	{
		$model=new Trabajadoraccidente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Trabajadoraccidente']))
			$model->attributes=$_GET['Trabajadoraccidente'];

		$this->render('principal',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Accidente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Accidente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Accidente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='accidente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
