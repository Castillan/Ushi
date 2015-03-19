<?php

/**
 * This is the model class for table "ficha_vacuna".
 *
 * The followings are the available columns in table 'ficha_vacuna':
 * @property integer $idFicha_Vacuna
 * @property string $Fecha
 * @property integer $Ficha_Medica_idFicha_Medica
 * @property integer $Vacuna_idVacuna
 *
 * The followings are the available model relations:
 * @property FichaMedica $fichaMedicaIdFichaMedica
 * @property Vacuna $vacunaIdVacuna
 */
class FichaVacuna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ficha_vacuna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, Ficha_Medica_idFicha_Medica, Vacuna_idVacuna', 'required'),
			array('Ficha_Medica_idFicha_Medica, Vacuna_idVacuna', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFicha_Vacuna, Fecha, Ficha_Medica_idFicha_Medica, Vacuna_idVacuna', 'safe', 'on'=>'search'),
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
			'fichaMedicaIdFichaMedica' => array(self::BELONGS_TO, 'FichaMedica', 'Ficha_Medica_idFicha_Medica'),
			'vacunaIdVacuna' => array(self::BELONGS_TO, 'Vacuna', 'Vacuna_idVacuna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFicha_Vacuna' => 'Id Ficha Vacuna',
			'Fecha' => 'Fecha',
			'Ficha_Medica_idFicha_Medica' => 'Ficha Medica Id Ficha Medica',
			'Vacuna_idVacuna' => 'Vacuna',
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

		$criteria->compare('idFicha_Vacuna',$this->idFicha_Vacuna);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Ficha_Medica_idFicha_Medica',$this->Ficha_Medica_idFicha_Medica);
		$criteria->compare('Vacuna_idVacuna',$this->Vacuna_idVacuna);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FichaVacuna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
