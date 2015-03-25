<?php

/**
 * This is the model class for table "trabajador".
 *
 * The followings are the available columns in table 'trabajador':
 * @property integer $idTrabajador
 * @property integer $Persona_idPersona
 * @property string $Nacionalidad
 * @property string $Sexo
 * @property string $Mano
 * @property integer $Edo_Civil_idEdo_Civil
 * @property integer $Hijos
 * @property integer $NivelEducativo_idNivelEducativo
 * @property string $Email
 * @property integer $CodigoPostal
 * @property string $IngresoUNET
 * @property string $IngresoIVSS
 * @property integer $Ubicacion_idUbicacion
 * @property integer $Cargo_idCargo
 * @property integer $Dependencia_idDependencia
 * @property string $Sueldo
 *
 * The followings are the available model relations:
 * @property Cargo $cargoIdCargo
 * @property EdoCivil $edoCivilIdEdoCivil
 * @property Niveleducativo $nivelEducativoIdNivelEducativo
 * @property Persona $personaIdPersona
 * @property Ubicacion $ubicacionIdUbicacion
 * @property Dependencia $dependenciaIdDependencia
 * @property Trabajadoraccidente[] $trabajadoraccidentes
 * @property Trabajadorruta[] $trabajadorrutas
 * @property string $Grado_Educacion
 */
class Trabajador extends CActiveRecord
{
    public $persona_nombre, $persona_apellido, $persona_cedula,$idn1, $idn2;
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_idPersona, Nacionalidad, Sexo, Mano, Edo_Civil_idEdo_Civil, Hijos, NivelEducativo_idNivelEducativo, Email, CodigoPostal, IngresoUNET, IngresoIVSS, Ubicacion_idUbicacion, Cargo_idCargo, Dependencia_idDependencia, Sueldo', 'required', 'message' => 'Campo {attribute} no puede estar en blanco'),
			array('Persona_idPersona, Edo_Civil_idEdo_Civil, Hijos, NivelEducativo_idNivelEducativo, CodigoPostal, Ubicacion_idUbicacion, Cargo_idCargo, Dependencia_idDependencia', 'numerical', 'integerOnly'=>true),
			array('Nacionalidad, Sexo, Mano', 'length', 'max'=>1),
			array('Email, Sueldo, Grado_Educacion','length', 'max'=>45),
            array('Email','validaEmail'),
            array('Persona_idPersona', 'unique', 'message' => 'Esta persona ya se encuentra registrada como trabajador'),
            array('Email', 'unique', 'message' => 'Correo ya se encuentra registrado'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTrabajador, Persona_idPersona, Nacionalidad, Sexo, Mano, Edo_Civil_idEdo_Civil, Hijos, NivelEducativo_idNivelEducativo, Email, CodigoPostal, IngresoUNET, IngresoIVSS, Ubicacion_idUbicacion, Cargo_idCargo, Dependencia_idDependencia, Sueldo, persona_nombre, persona_apellido, persona_cedula,idn1,idn2', 'safe', 'on'=>'search'),
		);
	}
    public function validaEmail($attribute,$params){
        if(!preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD", $this->Email))
            $this->addError('Email','Correo electrónico inválido');
    }
    
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cargoIdCargo' => array(self::BELONGS_TO, 'Cargo', 'Cargo_idCargo'),
			'edoCivilIdEdoCivil' => array(self::BELONGS_TO, 'EdoCivil', 'Edo_Civil_idEdo_Civil'),
			'nivelEducativoIdNivelEducativo' => array(self::BELONGS_TO, 'Niveleducativo', 'NivelEducativo_idNivelEducativo'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
			'ubicacionIdUbicacion' => array(self::BELONGS_TO, 'Ubicacion', 'Ubicacion_idUbicacion'),
			'dependenciaIdDependencia' => array(self::BELONGS_TO, 'Dependencia', 'Dependencia_idDependencia'),
			'trabajadoraccidentes' => array(self::HAS_MANY, 'Trabajadoraccidente', 'Trabajador_idTrabajador'),
			'trabajadorrutas' => array(self::HAS_MANY, 'Trabajadorruta', 'Trabajador_idTrabajador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTrabajador' => 'Id Trabajador',
			'Persona_idPersona' => 'Persona Id Persona',
			'Nacionalidad' => 'Nacionalidad',
			'Sexo' => 'Sexo',
			'Mano' => 'Mano',
			'Edo_Civil_idEdo_Civil' => 'Estado Civil',
			'Hijos' => 'Hijos',
			'NivelEducativo_idNivelEducativo' => 'Nivel Educativo',
			'Email' => 'Email',
			'CodigoPostal' => 'Codigo Postal',
			'IngresoUNET' => 'Ingreso a la Unet',
			'IngresoIVSS' => 'Ingreso al IVSS',
			'Ubicacion_idUbicacion' => 'Ubicacion Id Ubicacion',
			'Cargo_idCargo' => 'Cargo',
			'Dependencia_idDependencia' => 'Dependencia',
			'Sueldo' => 'Sueldo',
            'nivelEducativoIdNivelEducativo.eduacionIdEduacion.Nombre' => 'Nivel de educación',
            'cargoIdCargo.Nombre'=>'Cargo',
            'dependenciaIdDependencia.Nombre'=>'Dependencia',
            'edoCivilIdEdoCivil.Nombre'=>'Estado civil',
            'ubicacionIdUbicacion.Nombre'=>'Ubicación',
            'Grado_Educacion' => 'Grado de Educacion',
            'ubicacionIdUbicacion.ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre'=>'Estado',
            'ubicacionIdUbicacion.ubicacionIdUbicacion.Nombre'=>'Municipio',
            'ubicacionIdUbicacion.Nombre'=>'Parroquia',
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
                        
		$criteria->compare('idTrabajador',$this->idTrabajador);
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('Sexo',$this->Sexo,true);
		$criteria->compare('Mano',$this->Mano,true);
		$criteria->compare('Edo_Civil_idEdo_Civil',$this->Edo_Civil_idEdo_Civil);
		$criteria->compare('Hijos',$this->Hijos);
		$criteria->compare('NivelEducativo_idNivelEducativo',$this->NivelEducativo_idNivelEducativo);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('CodigoPostal',$this->CodigoPostal);
		$criteria->compare('IngresoUNET',$this->IngresoUNET,true);
		$criteria->compare('IngresoIVSS',$this->IngresoIVSS,true);
		$criteria->compare('Ubicacion_idUbicacion',$this->Ubicacion_idUbicacion);
		$criteria->compare('Cargo_idCargo',$this->Cargo_idCargo);
		$criteria->compare('Dependencia_idDependencia',$this->Dependencia_idDependencia,true);
		$criteria->compare('Sueldo',$this->Sueldo,true);
        $criteria->compare('personaIdPersona.Nombre', $this->persona_nombre, true );
        $criteria->compare('personaIdPersona.Apellido', $this->persona_apellido, true );
        $criteria->compare('personaIdPersona.Cedula', $this->persona_cedula, true );
		$criteria->compare('Grado_Educacion',$this->Grado_Educacion,true);
        
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
        foreach($this->trabajadoraccidentes as $c)
            $c->delete();
        foreach($this->trabajadorrutas as $c)
            $c->delete();
        return parent::beforeDelete();
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    const Extranjero = 'E';
    const Venezolano = 'V';
    const Femenino = 'F';
    const Masculino = 'M';
    const Izquierda = 'I';
    const Derecha = 'D';

    public static $dfLabels= array(
        self::Extranjero => 'Extranjero',
        self::Venezolano => 'Venezolano',
        self::Femenino => 'Femenino',
        self::Masculino => 'Masculino',
        self::Izquierda => 'Izquierda',
        self::Derecha => 'Derecha',
    );

    public function getNacionalidad()
    {
        return isset(self::$dfLabels[$this->Nacionalidad]) ? self::$dfLabels[$this->Nacionalidad] : '(undefined)';
    }
    
    public function getSexo()
    {
        return isset(self::$dfLabels[$this->Sexo]) ? self::$dfLabels[$this->Sexo] : '(undefined)';
    }
    
    public function getMano()
    {
        return isset(self::$dfLabels[$this->Mano]) ? self::$dfLabels[$this->Mano] : '(undefined)';
    }
}
