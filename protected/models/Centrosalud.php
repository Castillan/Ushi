<?php

/**
 * This is the model class for table "centrosalud".
 *
 * The followings are the available columns in table 'centrosalud':
 * @property integer $idCentroSalud
 * @property string $Nombre
 * @property string $Direccion
 * @property integer $TipoCentro_idTipoCentro
 * @property integer $TipoAtencion_idTipoAtencion
 *
 * The followings are the available model relations:
 * @property Tipoatencion $tipoAtencionIdTipoAtencion
 * @property Tipocentro $tipoCentroIdTipoCentro
 * @property Trabajadoraccidente[] $trabajadoraccidentes
 */
class Centrosalud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'centrosalud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Direccion, TipoCentro_idTipoCentro, TipoAtencion_idTipoAtencion', 'required'),
			array('TipoCentro_idTipoCentro, TipoAtencion_idTipoAtencion', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>100),
			array('Direccion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCentroSalud, Nombre, Direccion, TipoCentro_idTipoCentro, TipoAtencion_idTipoAtencion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipoAtencionIdTipoAtencion' => array(self::BELONGS_TO, 'Tipoatencion', 'TipoAtencion_idTipoAtencion'),
			'tipoCentroIdTipoCentro' => array(self::BELONGS_TO, 'Tipocentro', 'TipoCentro_idTipoCentro'),
			'trabajadoraccidentes' => array(self::HAS_MANY, 'Trabajadoraccidente', 'CentroSalud_idCentroSalud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCentroSalud' => 'Id Centro Salud',
			'Nombre' => 'Nombre',
			'Direccion' => 'Direccion',
			'TipoCentro_idTipoCentro' => 'Tipo Centro Id Tipo Centro',
			'TipoAtencion_idTipoAtencion' => 'Tipo Atencion Id Tipo Atencion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idCentroSalud',$this->idCentroSalud);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('TipoCentro_idTipoCentro',$this->TipoCentro_idTipoCentro);
		$criteria->compare('TipoAtencion_idTipoAtencion',$this->TipoAtencion_idTipoAtencion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Centrosalud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
