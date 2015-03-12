<?php

/**
 * This is the model class for table "ubicacion".
 *
 * The followings are the available columns in table 'ubicacion':
 * @property integer $idUbicacion
 * @property string $Nombre
 * @property integer $Ubicacion_idUbicacion
 * @property integer $TipoUbicacion_idTipoUbicacion
 *
 * The followings are the available model relations:
 * @property Accidente[] $accidentes
 * @property Trabajador[] $trabajadors
 * @property Ubicacion $ubicacionIdUbicacion
 * @property Ubicacion[] $ubicacions
 * @property Tipoubicacion $tipoUbicacionIdTipoUbicacion
 */
class Ubicacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ubicacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, TipoUbicacion_idTipoUbicacion', 'required'),
			array('Ubicacion_idUbicacion, TipoUbicacion_idTipoUbicacion', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUbicacion, Nombre, Ubicacion_idUbicacion, TipoUbicacion_idTipoUbicacion', 'safe', 'on'=>'search'),
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
			'accidentes' => array(self::HAS_MANY, 'Accidente', 'Ubicacion_idUbicacion'),
			'trabajadors' => array(self::HAS_MANY, 'Trabajador', 'Ubicacion_idUbicacion'),
			'ubicacionIdUbicacion' => array(self::BELONGS_TO, 'Ubicacion', 'Ubicacion_idUbicacion'),
			'ubicacions' => array(self::HAS_MANY, 'Ubicacion', 'Ubicacion_idUbicacion'),
			'tipoUbicacionIdTipoUbicacion' => array(self::BELONGS_TO, 'Tipoubicacion', 'TipoUbicacion_idTipoUbicacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUbicacion' => 'Id Ubicacion',
			'Nombre' => 'Ubicacion',
			'Ubicacion_idUbicacion' => 'Ubicacion Id Ubicacion',
			'TipoUbicacion_idTipoUbicacion' => 'Tipo Ubicacion Id Tipo Ubicacion',
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

		$criteria->compare('idUbicacion',$this->idUbicacion);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Ubicacion_idUbicacion',$this->Ubicacion_idUbicacion);
		$criteria->compare('TipoUbicacion_idTipoUbicacion',$this->TipoUbicacion_idTipoUbicacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ubicacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
