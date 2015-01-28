<?php

/**
 * This is the model class for table "trabajadoraccidente".
 *
 * The followings are the available columns in table 'trabajadoraccidente':
 * @property integer $Accidente_idAccidente
 * @property integer $idTrabajadorAccidente
 * @property integer $Horas
 * @property integer $Minutos
 * @property integer $CentroSalud_idCentroSalud
 * @property integer $Trabajador_idTrabajador
 *
 * The followings are the available model relations:
 * @property Centrosalud $centroSaludIdCentroSalud
 * @property Trabajador $trabajadorIdTrabajador
 * @property Accidente $accidenteIdAccidente
 */
class Trabajadoraccidente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajadoraccidente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Accidente_idAccidente, Horas, Minutos, CentroSalud_idCentroSalud, Trabajador_idTrabajador', 'required'),
			array('Accidente_idAccidente, Horas, Minutos, CentroSalud_idCentroSalud, Trabajador_idTrabajador', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Accidente_idAccidente, idTrabajadorAccidente, Horas, Minutos, CentroSalud_idCentroSalud, Trabajador_idTrabajador', 'safe', 'on'=>'search'),
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
			'centroSaludIdCentroSalud' => array(self::BELONGS_TO, 'Centrosalud', 'CentroSalud_idCentroSalud'),
			'trabajadorIdTrabajador' => array(self::BELONGS_TO, 'Trabajador', 'Trabajador_idTrabajador'),
			'accidenteIdAccidente' => array(self::BELONGS_TO, 'Accidente', 'Accidente_idAccidente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Accidente_idAccidente' => 'Accidente Id Accidente',
			'idTrabajadorAccidente' => 'Id Trabajador Accidente',
			'Horas' => 'Horas',
			'Minutos' => 'Minutos',
			'CentroSalud_idCentroSalud' => 'Centro Salud Id Centro Salud',
			'Trabajador_idTrabajador' => 'Trabajador Id Trabajador',
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

		$criteria->compare('Accidente_idAccidente',$this->Accidente_idAccidente);
		$criteria->compare('idTrabajadorAccidente',$this->idTrabajadorAccidente);
		$criteria->compare('Horas',$this->Horas);
		$criteria->compare('Minutos',$this->Minutos);
		$criteria->compare('CentroSalud_idCentroSalud',$this->CentroSalud_idCentroSalud);
		$criteria->compare('Trabajador_idTrabajador',$this->Trabajador_idTrabajador);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajadoraccidente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
