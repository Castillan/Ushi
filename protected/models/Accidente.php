<?php

/**
 * This is the model class for table "accidente".
 *
 * The followings are the available columns in table 'accidente':
 * @property integer $idAccidente
 * @property string $Fecha
 * @property integer $DiaSemana_idDiaSemana
 * @property string $Hora
 * @property integer $Dentro
 * @property integer $Ubicacion_idUbicacion
 * @property string $Lugar
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property Diasemana $diaSemanaIdDiaSemana
 * @property Ubicacion $ubicacionIdUbicacion
 * @property Testigo[] $testigos
 * @property Trabajadoraccidente[] $trabajadoraccidentes
 */
class Accidente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'accidente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fecha, DiaSemana_idDiaSemana, Hora, Dentro, Descripcion', 'required'),
			array('DiaSemana_idDiaSemana, Dentro, Ubicacion_idUbicacion', 'numerical', 'integerOnly'=>true),
			array('Lugar', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAccidente, Fecha, DiaSemana_idDiaSemana, Hora, Dentro, Ubicacion_idUbicacion, Lugar, Descripcion', 'safe', 'on'=>'search'),
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
			'diaSemanaIdDiaSemana' => array(self::BELONGS_TO, 'Diasemana', 'DiaSemana_idDiaSemana'),
			'ubicacionIdUbicacion' => array(self::BELONGS_TO, 'Ubicacion', 'Ubicacion_idUbicacion'),
			'testigos' => array(self::HAS_MANY, 'Testigo', 'Accidente_idAccidente'),
			'trabajadoraccidentes' => array(self::HAS_MANY, 'Trabajadoraccidente', 'Accidente_idAccidente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAccidente' => 'Id Accidente',
			'Fecha' => 'Fecha',
			'DiaSemana_idDiaSemana' => 'Dia de laSemana',
			'Hora' => 'Hora',
			'Dentro' => 'Dentro',
			'Ubicacion_idUbicacion' => 'Ciudad',
			'Lugar' => 'Lugar del Hecho',
			'Descripcion' => 'Descripcion del Accidente',
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

		$criteria->compare('idAccidente',$this->idAccidente);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('DiaSemana_idDiaSemana',$this->DiaSemana_idDiaSemana);
		$criteria->compare('Hora',$this->Hora,true);
		$criteria->compare('Dentro',$this->Dentro);
		$criteria->compare('Ubicacion_idUbicacion',$this->Ubicacion_idUbicacion);
		$criteria->compare('Lugar',$this->Lugar,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function beforeDelete(){
        foreach($this->trabajadoraccidentes as $c)
            $c->delete();
        foreach($this->testigos as $c)
            $c->delete();
        return parent::beforeDelete();
    }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Accidente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	const Fuera = 0;
    const Dentro = 1;

    public static $dfLabels= array(
        self::Fuera => 'Fuera',
        self::Dentro => 'Dentro',
    );

    public function getDentro()
    {
        return isset(self::$dfLabels[$this->Dentro]) ? self::$dfLabels[$this->Dentro] : '(undefined)';
    }
}
