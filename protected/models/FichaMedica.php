<?php

/**
 * This is the model class for table "ficha_medica".
 *
 * The followings are the available columns in table 'ficha_medica':
 * @property integer $idFicha_Medica
 * @property string $GrupoSanguineo
 * @property integer $RH
 * @property string $EstadoSalud 
 * @property integer $Persona_idPersona
 * @property string $Fecha
 * @property integer $idPariente
 * @property string $Parentesco
 *
 * The followings are the available model relations:
 * @property Condicion[] $condicions
 * @property Condicionmedicamento[] $condicionmedicamentos
 * @property Persona $personaIdPersona
 * @property Persona $idPariente0
 */
class FichaMedica extends CActiveRecord
{
    public $persona_nombre, $persona_apellido, $persona_cedula, $fecha_desde, $fecha_hasta, $tipo_nombre;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ficha_medica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GrupoSanguineo, RH, EstadoSalud, Persona_idPersona, Fecha, Parentesco', 'required'),
			array('RH, Persona_idPersona, idPariente', 'numerical', 'integerOnly'=>true),
			array('GrupoSanguineo', 'length', 'max'=>2),
			array('EstadoSalud, Parentesco', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idFicha_Medica, GrupoSanguineo, RH, EstadoSalud, Persona_idPersona, Fecha, idPariente, Parentesco, persona_nombre, persona_apellido, persona_cedula, fecha_desde, fecha_hasta', 'safe', 'on'=>'search'),
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
			'condicions' => array(self::HAS_MANY, 'Condicion', 'Ficha_Medica_idFicha_Medica'),
			'condicionmedicamentos' => array(self::HAS_MANY, 'Condicionmedicamento', 'Ficha_Medica_idFicha_Medica'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
			'idPariente0' => array(self::BELONGS_TO, 'Persona', 'idPariente'),
			'fichavacuna' => array(self::HAS_MANY, 'FichaVacuna', 'Ficha_Medica_idFicha_Medica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFicha_Medica' => 'Id Ficha Medica',
			'GrupoSanguineo' => 'Grupo Sanguineo',
			'RH' => 'Rh',
			'EstadoSalud' => 'Estado Salud',			
			'Persona_idPersona' => 'Persona Id Persona',
			'Fecha' => 'Fecha',
			'idPariente' => 'Id Pariente',
			'Parentesco' => 'Parentesco',
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

        $criteria->with = array('personaIdPersona');
		$criteria->compare('idFicha_Medica',$this->idFicha_Medica);
		$criteria->compare('GrupoSanguineo',$this->GrupoSanguineo,true);
		$criteria->compare('RH',$this->RH);
		$criteria->compare('EstadoSalud',$this->EstadoSalud,true);		
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('idPariente',$this->idPariente);
		$criteria->compare('Parentesco',$this->Parentesco,true);
        $criteria->compare('personaIdPersona.Nombre', $this->persona_nombre, true );
        $criteria->compare('personaIdPersona.Apellido', $this->persona_apellido, true );
        $criteria->compare('personaIdPersona.Cedula', $this->persona_cedula, true );
        if(!empty($this->fecha_desde) && !empty($this->fecha_hasta)){
            $criteria->addBetweenCondition('Fecha',$this->fecha_desde,$this->fecha_hasta,'AND');
        }
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'attributes'=>array(
                    'persona_nombre'=>array(
                        'asc'=>'personaIdPersona.Nombre',
                        'desc'=>'personaIdPersona.Nombre DESC',
                    ),
                    'persona_apellido'=>array(
                        'asc'=>'personaIdPersona.Apellido',
                        'desc'=>'personaIdPersona.Apellido DESC',
                    ),
                    'persona_cedula'=>array(
                        'asc'=>'personaIdPersona.Cedula',
                        'desc'=>'personaIdPersona.Cedula DESC',
                    ),
                    '*',
                ),
            ),
		));
	}
    
    public function beforeDelete(){
        foreach($this->condicions as $c)
            $c->delete();
        foreach($this->condicionmedicamentos as $c)
            $c->delete();
        foreach($this->fichavacuna as $c)
            $c->delete();
        return parent::beforeDelete();
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FichaMedica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	const Negativo = 0;
    const Positivo = 1;

    public static $rhLabels= array(
        self::Negativo => 'Negativo',
        self::Positivo => 'Positivo',
    );

    public function getRH()
    {
        return isset(self::$rhLabels[$this->RH]) ? self::$rhLabels[$this->RH] : '(undefined)';
    }
}
