<?php

class FichaMedicaController extends Controller
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
				'actions'=>array('create','update'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),	
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
	/**	$model=new FichaMedica;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FichaMedica']))
		{
			$model->attributes=$_POST['FichaMedica'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idFicha_Medica));
		}

		$this->render('create',array(
			'model'=>$model,
		));*/
		
		 $model1=new FichaMedica;
		 $model2=new Persona;
		
		 if(isset($_POST['FichaMedica'], $_POST['Persona']))        
		 {
		    // populate input data to $a and $b
		    $model1->attributes=$_POST['FichaMedica'];
		    $model2->attributes=$_POST['Persona'];
		
		    // validate BOTH $a and $b
		   $valid=$model1->validate();
		        $valid=$model2->validate() && $valid;
		
		        if($valid)
		        {
		            $model2->save(false);
		
		            $model1->idPariente = $model2->idPersona;
		            $model1->save();
		        }
		    }
		
			if(isset($_POST['FichaMedica']))
			{
				$model1->attributes=$_POST['FichaMedica'];
				if($model1->save())
					$this->redirect(array('view','id'=>$model1->idFicha_Medica));
			}
			
		    $this->render('create', array(
		        'model2'=>$model2,
		        'model1'=>$model1,
		        
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

		if(isset($_POST['FichaMedica']))
		{
			$model->attributes=$_POST['FichaMedica'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idFicha_Medica));
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
		$dataProvider=new CActiveDataProvider('FichaMedica');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FichaMedica('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FichaMedica']))
			$model->attributes=$_GET['FichaMedica'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FichaMedica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FichaMedica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FichaMedica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ficha-medica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
