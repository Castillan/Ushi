<?php

/**
 * This is the model class for table "condicionmedicamento".
 *
 * The followings are the available columns in table 'condicionmedicamento':
 * @property integer $idCondicionMedicamento
 * @property string $Dosis
 * @property string $EfectoSecundario
 * @property integer $Medicamento_idMedicamento
 * @property integer $Ficha_Medica_idFicha_Medica
 *
 * The followings are the available model relations:
 * @property FichaMedica $fichaMedicaIdFichaMedica
 * @property Medicamento $medicamentoIdMedicamento
 */
class Condicionmedicamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condicionmedicamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Dosis, EfectoSecundario, Medicamento_idMedicamento, Ficha_Medica_idFicha_Medica', 'required'),
			array('Medicamento_idMedicamento, Ficha_Medica_idFicha_Medica', 'numerical', 'integerOnly'=>true),
			array('Dosis', 'length', 'max'=>15),
			array('EfectoSecundario', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCondicionMedicamento, Dosis, EfectoSecundario, Medicamento_idMedicamento, Ficha_Medica_idFicha_Medica', 'safe', 'on'=>'search'),
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
			'medicamentoIdMedicamento' => array(self::BELONGS_TO, 'Medicamento', 'Medicamento_idMedicamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCondicionMedicamento' => 'Id Condicion Medicamento',
			'Dosis' => 'Dosis',
			'EfectoSecundario' => 'Efecto Secundario',
			'Medicamento_idMedicamento' => 'Medicamento',
			'Ficha_Medica_idFicha_Medica' => 'Ficha Medica Id Ficha Medica',
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

		$criteria->compare('idCondicionMedicamento',$this->idCondicionMedicamento);
		$criteria->compare('Dosis',$this->Dosis,true);
		$criteria->compare('EfectoSecundario',$this->EfectoSecundario,true);
		$criteria->compare('Medicamento_idMedicamento',$this->Medicamento_idMedicamento);
		$criteria->compare('Ficha_Medica_idFicha_Medica',$this->Ficha_Medica_idFicha_Medica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Condicionmedicamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
