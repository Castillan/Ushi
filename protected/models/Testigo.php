<?php

/**
 * This is the model class for table "testigo".
 *
 * The followings are the available columns in table 'testigo':
 * @property integer $Persona_idPersona
 * @property integer $Accidente_idAccidente
 * @property integer $idTestigo
 *
 * The followings are the available model relations:
 * @property Accidente $accidenteIdAccidente
 * @property Persona $personaIdPersona
 */
class Testigo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'testigo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_idPersona, Accidente_idAccidente', 'required'),
			array('Persona_idPersona, Accidente_idAccidente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Persona_idPersona, Accidente_idAccidente, idTestigo', 'safe', 'on'=>'search'),
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
			'accidenteIdAccidente' => array(self::BELONGS_TO, 'Accidente', 'Accidente_idAccidente'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Persona_idPersona' => 'Persona Id Persona',
			'Accidente_idAccidente' => 'Accidente Id Accidente',
			'idTestigo' => 'Id Testigo',
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

		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('Accidente_idAccidente',$this->Accidente_idAccidente);
		$criteria->compare('idTestigo',$this->idTestigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Testigo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
