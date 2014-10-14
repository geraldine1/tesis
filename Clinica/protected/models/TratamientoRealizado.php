<?php

/**
 * This is the model class for table "tratamiento_realizado".
 *
 * The followings are the available columns in table 'tratamiento_realizado':
 * @property integer $id_realizado
 * @property integer $id_ficha
 * @property integer $id_tratamiento
 * @property string $comentario
 * @property integer $valor
 *
 * The followings are the available model relations:
 * @property TieneTratamiento[] $tieneTratamientos
 * @property FichaDental $idFicha
 * @property Tratamiento $idTratamiento
 */
class TratamientoRealizado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tratamiento_realizado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ficha, id_tratamiento, comentario, valor, fecha', 'required'),
			array('id_ficha, id_tratamiento, valor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_realizado, id_ficha, id_tratamiento, comentario, valor, fecha', 'safe', 'on'=>'search'),
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
			'tieneTratamientos' => array(self::HAS_MANY, 'TieneTratamiento', 'id_realizado'),
			'idFicha' => array(self::BELONGS_TO, 'FichaDental', 'id_ficha'),
			'idTratamiento' => array(self::BELONGS_TO, 'Tratamiento', 'id_tratamiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_realizado' => 'Id Realizado',
			'id_ficha' => 'Id Ficha',
			'id_tratamiento' => 'Id Tratamiento',
			'comentario' => 'Comentario',
			'valor' => 'Valor',
                        'fecha' => 'Fecha',
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

		$criteria->compare('id_realizado',$this->id_realizado);
		$criteria->compare('id_ficha',$this->id_ficha);
		$criteria->compare('id_tratamiento',$this->id_tratamiento);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('valor',$this->valor);
                $criteria->compare('fecha', $this->fecha);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchByPaciente($id)
        {
                // @todo Please modify the following code to remove attributes that should not be searched.

                $criteria=new CDbCriteria;

                $criteria->compare('id_ficha',$id,true);
                $criteria->compare('id_realizado',$this->id_realizado);
		$criteria->compare('id_tratamiento',$this->id_tratamiento);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('valor',$this->valor);
                $criteria->compare('fecha', $this->fecha);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
        }
        
        public function getMenuTratamientos() {
            
            return CHtml::listData(Tratamiento::model()->findAll(), "id_tratamiento", "nombre");
            
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TratamientoRealizado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
