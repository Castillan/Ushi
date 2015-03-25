<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $idPersona
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Cedula
 * @property string $FechaNacimiento
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Celular
 *
 * The followings are the available model relations:
 * @property FichaMedica[] $fichaMedicas
 * @property FichaMedica[] $fichaMedicas1
 * @property Testigo[] $testigos
 * @property Trabajador[] $trabajadors
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Apellido, Direccion , Cedula, Celular', 'required','message' => 'Campo {attribute} no puede estar en blanco'),
			array('Nombre, Apellido, Direccion', 'length', 'max'=>45),
            array('Cedula, Telefono, Celular', 'numerical', 'integerOnly'=>true),
			array('Cedula', 'length', 'min'=>6, 'max'=>9),
			array('Cedula', 'unique', 'message' => 'Cedula ya se encuentra registrada'),
			array('Telefono, Celular', 'length', 'min'=>10,'max'=>11),			
			array('FechaNacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPersona, Nombre, Apellido, Cedula, FechaNacimiento, Direccion, Telefono, Celular', 'safe', 'on'=>'search'),
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
			'fichaMedicas' => array(self::HAS_MANY, 'FichaMedica', 'Persona_idPersona'),
			'fichaMedicas1' => array(self::HAS_MANY, 'FichaMedica', 'idPariente'),
			'testigos' => array(self::HAS_MANY, 'Testigo', 'Persona_idPersona'),
			'trabajadors' => array(self::HAS_MANY, 'Trabajador', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPersona' => 'Id Persona',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
			'Cedula' => 'Cedula',
			'FechaNacimiento' => 'Fecha Nacimiento',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Celular' => 'Celular',
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

		$criteria->compare('idPersona',$this->idPersona);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('FechaNacimiento',$this->FechaNacimiento,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Celular',$this->Celular,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
