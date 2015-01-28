<?php

/**
 * This is the model class for table "niveleducativo".
 *
 * The followings are the available columns in table 'niveleducativo':
 * @property integer $Educacion_idEducacion
 * @property integer $Grado_idGrado
 * @property integer $idNivelEducativo
 *
 * The followings are the available model relations:
 * @property Educacion $educacionIdEducacion
 * @property Grado $gradoIdGrado
 * @property Trabajador[] $trabajadors
 */
class Niveleducativo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'niveleducativo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Educacion_idEducacion, Grado_idGrado', 'required'),
			array('Educacion_idEducacion, Grado_idGrado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Educacion_idEducacion, Grado_idGrado, idNivelEducativo', 'safe', 'on'=>'search'),
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
			'educacionIdEducacion' => array(self::BELONGS_TO, 'Educacion', 'Educacion_idEducacion'),
			'gradoIdGrado' => array(self::BELONGS_TO, 'Grado', 'Grado_idGrado'),
			'trabajadors' => array(self::HAS_MANY, 'Trabajador', 'NivelEducativo_idNivelEducativo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Educacion_idEducacion' => 'Educacion Id Educacion',
			'Grado_idGrado' => 'Grado Id Grado',
			'idNivelEducativo' => 'Id Nivel Educativo',
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

		$criteria->compare('Educacion_idEducacion',$this->Educacion_idEducacion);
		$criteria->compare('Grado_idGrado',$this->Grado_idGrado);
		$criteria->compare('idNivelEducativo',$this->idNivelEducativo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Niveleducativo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
