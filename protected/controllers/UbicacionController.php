<?php

class UbicacionController extends Controller
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
				'actions'=>array('create','update','selectmunicipio','selectparroquia','selectmunicipiotrab','selectparroquiatrab'),
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
		$model=new Ubicacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ubicacion']))
		{
			$model->attributes=$_POST['Ubicacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idUbicacion));
		}

		$this->render('create',array(
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

		if(isset($_POST['Ubicacion']))
		{
			$model->attributes=$_POST['Ubicacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idUbicacion));
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
		$dataProvider=new CActiveDataProvider('Ubicacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ubicacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ubicacion']))
			$model->attributes=$_GET['Ubicacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ubicacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ubicacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ubicacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ubicacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionSelectmunicipio(){
    
        $id_1 = $_POST['Accidente']['idn1'];
        $lista = Ubicacion::model()->findAll('TipoUbicacion_idTipoUbicacion = 2 && Ubicacion_idUbicacion = :id1',array(':id1'=>$id_1));
        $lista = CHtml::listData($lista,'idUbicacion','Nombre');
        
        echo CHtml::tag('option',array('value'=>''),CHtml::encode('Seleccione uno'),true);
        foreach($lista as $clave=>$valor) 
        echo CHtml::tag('option',array('value'=>$clave),CHtml::encode($valor),true);
        //echo CHtml::activeDropDownList(new Accidente(),'idn2',$lista,array('prompt'=>'Seleccione uno'));        
        
    }
    
     public function actionSelectparroquia(){
    
        $id_2 = $_POST['Accidente']['idn2'];
        $lista = Ubicacion::model()->findAll('TipoUbicacion_idTipoUbicacion = 3 && Ubicacion_idUbicacion = :id2',array(':id2'=>$id_2));
        $lista = CHtml::listData($lista,'idUbicacion','Nombre');
        
        echo CHtml::tag('option',array('value'=>''),CHtml::encode('Seleccione una'),true);
        foreach($lista as $clave=>$valor) 
        echo CHtml::tag('option',array('value'=>$clave),CHtml::encode($valor),true);                
        
    }
    
    public function actionSelectmunicipiotrab(){
    
        $id_1 = $_POST['Trabajador']['idn1'];
        $lista = Ubicacion::model()->findAll('TipoUbicacion_idTipoUbicacion = 2 && Ubicacion_idUbicacion = :id1',array(':id1'=>$id_1));
        $lista = CHtml::listData($lista,'idUbicacion','Nombre');
        
        echo CHtml::tag('option',array('value'=>''),CHtml::encode('Seleccione uno'),true);
        foreach($lista as $clave=>$valor) 
        echo CHtml::tag('option',array('value'=>$clave),CHtml::encode($valor),true);
        //echo CHtml::activeDropDownList(new Accidente(),'idn2',$lista,array('prompt'=>'Seleccione uno'));        
        
    }
    
     public function actionSelectparroquiatrab(){
    
        $id_2 = $_POST['Trabajador']['idn2'];
        $lista = Ubicacion::model()->findAll('TipoUbicacion_idTipoUbicacion = 3 && Ubicacion_idUbicacion = :id2',array(':id2'=>$id_2));
        $lista = CHtml::listData($lista,'idUbicacion','Nombre');
        
        echo CHtml::tag('option',array('value'=>''),CHtml::encode('Seleccione una'),true);
        foreach($lista as $clave=>$valor) 
        echo CHtml::tag('option',array('value'=>$clave),CHtml::encode($valor),true);                
        
    }
}
