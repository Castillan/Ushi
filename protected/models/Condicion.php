<?php

/**
 * This is the model class for table "condicion".
 *
 * The followings are the available columns in table 'condicion':
 * @property integer $idCondicion
 * @property integer $Ficha_Medica_idFicha_Medica
 * @property string $Detalle
 * @property integer $TipoCondicion_idTipoCondicion
 *
 * The followings are the available model relations:
 * @property FichaMedica $fichaMedicaIdFichaMedica
 * @property Tipocondicion $tipoCondicionIdTipoCondicion
 */
class Condicion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condicion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Ficha_Medica_idFicha_Medica, Detalle, TipoCondicion_idTipoCondicion', 'required'),
			array('Ficha_Medica_idFicha_Medica, TipoCondicion_idTipoCondicion', 'numerical', 'integerOnly'=>true),
			array('Detalle', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCondicion, Ficha_Medica_idFicha_Medica, Detalle, TipoCondicion_idTipoCondicion', 'safe', 'on'=>'search'),
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
			'tipoCondicionIdTipoCondicion' => array(self::BELONGS_TO, 'Tipocondicion', 'TipoCondicion_idTipoCondicion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCondicion' => 'Id Condicion',
			'Ficha_Medica_idFicha_Medica' => 'Ficha Medica #',
			'Detalle' => 'Detalle',
			'TipoCondicion_idTipoCondicion' => 'Tipo de Condicion',
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

		$criteria->compare('idCondicion',$this->idCondicion);
		$criteria->compare('Ficha_Medica_idFicha_Medica',$this->Ficha_Medica_idFicha_Medica);
		$criteria->compare('Detalle',$this->Detalle,true);
		$criteria->compare('TipoCondicion_idTipoCondicion',$this->TipoCondicion_idTipoCondicion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Condicion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
